<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery-3.2.1.min"></script>
	<script src="css_1.js"></script>
	<style>
		.subcomment{
			color: red;
		}
	</style>
</head>
<body>
<?php 
	$link=mysqli_connect('localhost','root','','boxchat');
	if(!isset($link))
	{
		die("khong the ket noi. ");
	}
	else{
		if(isset($_POST['insert']))
		{
			mysqli_set_charset($link,'UTF8');
			$user=$_POST['user'];
			$comment=$_POST['comment'];
			$sql="insert into boxchat values('','$user','$comment')";
			mysqli_query($link,$sql);
		}
	}
 ?>
	<form action="" method="post">
		<table style="border:2px solid #ccc;margin:30px auto;" >
			<tr>
				<td>User: <input type="text" name="user" value=""><input type="submit" value="Gửi" name="insert"></td>
				<td><p>comment:</p></td>
			</tr>
			<tr>
				<td>
					<textarea name="comment" cols="28" rows="14"></textarea>
				</td>
				<td>
					<div style="width:600px;height:220px; border:1px solid #ccc;overflow: scroll;">
						<?php 
							$sql="select * from boxchat";
							$result=mysqli_query($link,$sql)or die(mysqli_error());
							while($row=mysqli_fetch_array($result))
							{
								echo"<div class='subcomment'> <b>".$row['users'].":</b>".$row['comments']."</div>";
							}
						 ?>

					</div>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>