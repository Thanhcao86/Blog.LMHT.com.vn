<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh sửa</title>
	<link rel="stylesheet" type="text/css" href="addpost.css">
</head>
<body>
	<?php
		session_start();
		 $id_user = $_SESSION['id_userlg'];

		 $id_baidang = $_GET['id'];
		 $_SESSION['id_baichinhsua'] = "$id_baidang";
		 $dbhost = 'localhost';
		 $dbuser = 'root';
		 $dbpass = '';  
		 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
		 if(! $conn )
		 	{
		 		die('Không thể lấy dữ liệu: ' . mysql_error());
		 	}
		 mysql_select_db('bloglmht');

		   $sql= "SELECT * FROM baidang where id_bai='$id_baidang'";
			$retval2= mysql_query( $sql, $conn);
         	$row = mysql_fetch_array($retval2);
         if ($row['id_user'] == $id_user|| $id_user='-1') {
         	while ($row) {
         	?>
				<div class ="theme">
				<form action="checkedit.php" method="post" enctype="multipart/form-data">
					<input type="text" name="title_BV" value="<?php echo $row['title']; ?>"><label>Title</label>
					</p>
					<textarea type="text" name="noidung_BV" value="<?php echo $row['noidung']; ?>"></textarea><label>Nội Dung</label>
					</p>
					Select file : <input type="file" name="file" size="20" /><br />
				    <input type="submit" value="Upload" name="ok" onclick="confirmedit()"/>
				    </form>
				</div>

			
         	<?php
         }
     }
         else{
         	echo "<h2><p align='center'>ERR 505</p></h2>";
         	echo "<p align='center'>You cant not edit the post</p>";
         	echo "<p align='center'>Click here to back: <a href='baidang.php'>Click me.!</a></p>";
         }
	?>
	<SCRIPT LANGUAGE="JavaScript">
    function confirmedit() {
      	return confirm("You want to edit it.?");
    }
</SCRIPT>
</body>
</html>