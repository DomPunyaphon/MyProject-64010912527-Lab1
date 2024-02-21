<meta charset="utf-8">
<?php
$host = "localhost";
$user = "root";
$pwd = "12345678";
$db = "domshop";

$conn = mysqli_connect($host,$user,$pwd) or die("เชื่อมต่อฐานข้อมูลไม่ได้"); //รหัสผิดขึ้นแบบนี้
mysqli_select_db($conn, $db) or die("เลือกฐานข้อมูลไม่ได้");               //ทำให้เลือกชื่อร้านได้
mysqli_query($conn, "set names uft8");                               //ทำให้อ่านถาษาไทยในDBได้
?>