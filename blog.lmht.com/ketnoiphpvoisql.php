<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//mysql hoặc PDO
//b1 ket noi server//database server.
$link = mysqli_connect('localhost','root','','blogdota2');//host namw, tên user, passord, ten database. trả về giá trị bollen
if(!$link)
{
	die('ket noi khong thanh con');//ngắt luôn
}
else{
	echo "ket noi thanh cong";
}
$spl = "select * from user";
$result =mysqli_query($link,$spl);//truy vaans trả ra tổng các bản ghi.
//xử lý kết quả
echo'<ul';
while ($row = mysqli_fetch_array($result)) { //cps thể dùng mysqli_fetch_assoc
	echo "<li>$row[1]</li>";
}
echo '</ul';
//đóng kết nối
mysqli_close($link)
?>
</body>
</html>