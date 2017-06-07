<?php
		$getUser = $_POST['txtUser'];
	$getPass = $_POST['txtPass'];
	$getname =$_POST['txtFirstName'];
	$getlast = $_POST['txtLastname'];
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$link = mysql_connect($dbhost, $dbuser, $dbpass);
	
	if(! $link )
	{
		die('Không thể lấy dữ liệu: ' . mysql_error());
	}
	mysql_select_db('bloglmht');

	$sql = "SELECT * FROM taikhoan WHERE ten_tai_khoan = '$getUser'";
	$result = mysql_query($sql);
	//echo "hello".$getname.$getlast;
	$sqlus = "SELECT id_taikhoan FROM taikhoan ORDER BY id_taikhoan DESC";
    $retval = mysql_query( $sqlus, $link );
    $row = mysql_fetch_array($retval, MYSQL_NUM );
	$rec_count = $row[0] +1;

	if(isset($_POST['txtUser']) && !empty($_POST['txtPass']))
	{

		if(!$result){
				echo "Its exit";
		}
		else{

			$sqli = "INSERT INTO taikhoan (ten_tai_khoan, passwords, id_taikhoan) 
        VALUES ('$getUser', '$getPass', '$rec_count')";
// Thực hiện thêm record
			if (mysql_query($sqli,$link)) {
				echo "1232";
				$sqlust = "SELECT id_user FROM user ORDER BY id_user DESC";
				$retvalt = mysql_query( $sqlust, $link );
				$rowt2 = mysql_fetch_array($retval, MYSQL_NUM );
         		$rec_countuser = $rowt2[0] +1;
				$sqluser = "INSERT INTO user (id_user, name, ngaysinh,gioitinh,sdt,icon,id_taikhoan,firstname) 
       			 VALUES ('$rec_countuser', '$getlast', '', '', '', '', '$rec_count','$getname')";
			     mysqli_query($link, $sqluser);
			 	 header('localhost: http://localhost:800/blog.lmht.com/LoginForm%20(Ajax)/index.php');
			}
		 }
	}
	else{
		echo "chưa nhập dữ liệu";
	}
?>