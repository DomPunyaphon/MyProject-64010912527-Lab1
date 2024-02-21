<?
session_start();

//session_destroy();

unset($_SESSION['aid'] );
unset($_SESSION['aname']);

echo "<script>";
echo "window.location='index.php';";
echo "</script>";
?>