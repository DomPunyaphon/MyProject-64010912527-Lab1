<meta charset="utf-8">
<?php
if(isset($_GET['id'])){
	include("connectdb.php");
	$sql = "DELETE FROM products WHERE `p_id`='{$_GET['id']}' ";
	mysqli_query($conn, $sql) or die("ลบข้อมูลสินค้าไม่ได้");
	
	unlink("image/{$_GET['id']}.{$_GET['ext']}");
	
	echo"<script>";
	echo"alert('ลบข้อมูลสินค้าสำเร็จ');";
	echo"window.location='index2.php';";
	echo"</script>";

}
?>