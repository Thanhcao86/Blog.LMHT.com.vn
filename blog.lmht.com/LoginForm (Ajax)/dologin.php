<?php
	include('check.php');
	session_start();
	
	$id = $_POST['uid'];
	$pass = $_POST['upass'];
	$status="header('Location: http://facebook.com')";

	if(isset($_POST['uid']) && !empty($_POST['uid']))
	{
		if(checkInputUser($id)==1)
		{

			$host = 'localhost';
			$user = 'root';
			$passw = '';
			$link=mysqli_connect($host, $user, $passw);
			mysqli_select_db($link,'bloglmht');
			$_SESSION['id_userlg'] =-1;
			$dologin = "select * from taikhoan where ten_tai_khoan ='$id' and passwords = '$pass'";
			$result = mysqli_query($link,$dologin);
			$bow =  mysqli_fetch_array($result);
			if($bow > 0)
			{
				//echo "$bow[id_taikhoan]";
			
			 $id_user = "select id_user from user where id_taikhoan = $bow[id_taikhoan]";
			 $resulte = mysqli_query($link,$id_user);
			 $row =  mysqli_fetch_array($resulte);
			  if ($row>0) {
			  	 echo "Successfully Logged In";
			 	echo "</p>";
			 	$_SESSION[ 'id_userlg'] = "$row[id_user]";
			  	 echo "Click here to apd_continue<a href='http://localhost:800/blog.lmht.com/Update/baidang.php'>Click 
			 Here</a>";
			  }
			  else{
			  	echo "Err: 103";
			  }
			
			
			}
			else
			{
			 echo "Wrong Id Or Password";
			}
		}
	}else
	{
		echo 'Ban chua nhap du lieu';
	}
?>