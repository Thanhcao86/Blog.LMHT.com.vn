<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
if(isset($_POST['txtUser']))
{
	//kết nối database
	//truy vấn dữ liệu
	//xử lí kết quả.
	//đóng kết nối
	$getUser = $_POST['txtUser'];
	$getPass = $_POST['txtPass'];
	$host ='localhost';
	$user = 'root';
	$mysql = 'bloglmht';
	$link = mysqli_connect($host, $user,'',$mysql);
	$sql = "SELECT * FROM baidang";
	$result = mysqli_query($link,$sql);
?>
<table>
<tr>
	<td>mã bài viết</td>
	<td>tiêu đề</td>
	<td>thể loại</td>
</tr>
<?php

	while($row=mysqli_fetch_array($result))
	{
	?>
<tr>
	<td><?php echo $row['id_user'];?></td>
	<td><?php echo $row['id_bai'];?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['tomtat'];?></td>
	<td><a href="xoa.php?id=??">Xóa</a></td>
	<td><a href="sua.php?id=??">Sửa</a></td>
</tr>
<?php
	}
}
	?>


	//function trong php
	function select_db($sql){
	return $caigiodo
	}
</table>
</body>
</html>