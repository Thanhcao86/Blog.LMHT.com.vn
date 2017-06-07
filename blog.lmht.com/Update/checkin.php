<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nội Dung</title>
	<link rel="stylesheet" type="text/css" href="baidang.css">
</head>
<body>
<?php
session_start();
	$id_baidang = $_GET["id"];
	$host ='localhost';
	$user = 'root';
	$mysql = 'bloglmht';
	$link = mysqli_connect($host, $user,'',$mysql);
	$sql = "SELECT * FROM baidang WHERE id_bai=$id_baidang";
	$result = mysqli_query($link,$sql);
?>
<form class="form">
<?php
	
	while($row=mysqli_fetch_array($result))
	{

				echo "<div id='post-11342' class='post-11342 post type-post status-publish format-standard hentry category-uncategorized'>";
	              	echo "<a href='sua.php?id=$id_baidang'>Sửa</a></td>";
					echo "<h2 class='entry-title'>$row[title]</h2>";
					echo "$row[ngay_dang].'-LOL Team'";
					echo "</p>";
					echo "$row[noidung]";
					echo "</p>";
					echo "<img src='$row[picture]' width = '600px' height='600px'>";
					echo "</div>";
					echo "<div class='dota_rule'></div>";
	}
	?>
</form>


<!-- xử lí phần comment -->

<?php 
	
	$id_user = $_SESSION['id_userlg'];
	//$id_baidang = $_SESSION['id_baidang'];
	 $dbhost = 'localhost';
	 $comment = $_POST['comment'];
			         $dbuser = 'root';
			         $dbpass = '';  
			         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
			         if(! $conn )
			         {
			            die('Không thể lấy dữ liệu: ' . mysql_error());
			         }
			         mysql_select_db('bloglmht');

			         $sql= "SELECT id_comment FROM comment ORDER BY id_comment DESC";
			         $retval2= mysql_query( $sql, $conn);
         			 $row = mysql_fetch_array($retval2);
         			 $soid = $row['0']+1;

		 $sql = "INSERT INTO comment (id_user, id_comment, noi_dung, id_baidang)
			VALUES ('$id_user', '$soid', '$comment','$id_baidang')";
			echo "".$id_baidang;
			if(mysql_query($sql)){
				echo "completed";
				//header('Location: http://localhost:800/blog.lmht.com/Update/checkin.php?id=');
			}
 ?>
	<form action="" method="post">
		<table style="border:2px solid #ccc;margin:30px auto;" >
			<tr>
				<td><input type="submit" value="Gửi" name="insert"></td>
				<td><p>comment:</p></td>
			</tr>
			<tr>
				<td>
					<textarea name="comment" cols="28" rows="14"></textarea>
				</td>
				<td>
					<div style="width:600px;height:220px; border:1px solid #ccc;overflow: scroll;">
						<?php 
							$sql="select * from comment where $id_baidang = id_baidang";
							$result=mysqli_query($link,$sql)or die(mysqli_error());
							while($row=mysqli_fetch_array($result))
							{
								echo"<div class='subcomment'>";
								//echo "$username".":";
								echo"$row[noi_dung]";
								echo "</div>";
							}
						 ?>

					</div>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>