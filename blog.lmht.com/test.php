<!DOCTYPE html>
<html>
<head>
	<title>test sql</title>
</head>
<body>
<?php
$link =mysqli_connect('localhost','root','','blogdota2');
if (!$link) {
	die('false');
	# code...
}
$sql="select ngay from tintuc";
$result = mysqli_query($link,$sql);
echo "<div class='hello'>";
echo "<ul>";
while ($row = mysqli_fetch_array($result)) {
	echo "<li>$row[1]</li>";
}
echo "</ul>";
echo"</div>";
?>
</body>
</html>