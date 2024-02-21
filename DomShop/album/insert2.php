<?php
session_start();
if(empty($_SESSION['aid'])){
	echo"Access Denied !!!";
	exit;
}
echo $_SESSION['aname'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มข้อมูลประเภทสินค้า</title>
</head>

<h1>เพิ่มข้อมูลประเภทสินค้า</h1>

<form method="post" action="">
เพิ่มข้อมูลประเภทสินค้า <input type="text" name="cate" required><br>
<br><br>
<input type="submit" name="Submit" value="บันทึกข้อมูล">

</form>
<h3>แสดงข้อประเภทสินค้า</h3>
<?php
include("connectdb.php");

$sql = "SELECT * FROM `category`";
$rs = mysqli_query($conn, $sql);
if (mysqli_num_rows($rs) > 0) {
    echo "<ul>";
    while ($data = mysqli_fetch_assoc($rs)) {
        echo "<li>{$data['c_name']}</li>";
    }
    echo "</ul>";
} else {
    echo "ไม่มีข้อมูลประเภทสินค้า";
}

mysqli_close($conn);
?>   


<?php
if(isset($_POST['Submit'])){
    include("connectdb.php");
	$cate = mysqli_real_escape_string($conn, $_POST['cate']);
	$sql = "INSERT INTO `category` (`c_id`, `c_name`) VALUES (NULL, '$cate');";
	mysqli_query($conn, $sql) or die ("เพิ่มข้อมูลประเภทสินค้าไม่ได้");
	
	echo"<script>";
	echo"alert('เพิ่มข้อมูลประเภทสินค้าสำเร็จ');";
	echo"window.location='insert2.php';";
	echo"</script>";
}
?>

</body>
</html>
