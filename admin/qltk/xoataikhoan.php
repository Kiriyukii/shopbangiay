<?php
require("../../connect.php");
if(isset($_GET['ten_dang_nhap']))
{
	$tdn = $_GET['ten_dang_nhap'];
}
$query = mysqli_query($conn, "DELETE FROM khachhang WHERE ten_dang_nhap = '$tdn'");
$sql = "DELETE FROM taikhoan WHERE ten_dang_nhap = '$tdn'";
$query = mysqli_query($conn, $sql);
header("location: ../trangchuad.php?cn=qltk")
?>