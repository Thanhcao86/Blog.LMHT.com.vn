<?php
session_start();
include("check.php");
$host = 'localhost';
$user = 'root';
$pass = '';
$link=mysqli_connect($host, $user, $pass);
mysqli_select_db($link,'bloglmht');

$username=$_POST['uid'];
$password=$_POST['matkhau'];

$sl="select * from users where Username='".$username."' and Password='".$password."'";
$kq=mysql_query($sl,$link);
$row=mysql_fetch_array($kq);
if(mysql_num_rows($kq)>0){
 /*$d=mysql_fetch_array($kq);
}
echo "Chao ban ".$d['HoTen'];*/
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['hoten']=$row['HoTen'];
echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='noidung.php';</script>";
}
else
{
echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "http://localhost:800/blog.lmht.com/LoginForm%20(Ajax)/index.php';</script>";
}
?>