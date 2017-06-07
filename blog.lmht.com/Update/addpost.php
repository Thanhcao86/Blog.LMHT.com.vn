<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload file trong PHP</title>
	<meta charset="UTF-8">
	<title>Addpost</title>
	<link rel="stylesheet" type="text/css" href="addpost.css">
</head>
<body>

<div class ="theme">
<form action="checkaddpost.php" method="post" enctype="multipart/form-data">
	<input type="text" name="title_BV" placeholder="write a some word for title"><label>Title</label>
	</p>
	<textarea type="text" name="noidung_BV" placeholder="write a something"></textarea><label>Nội Dung</label>
	</p>
	Select file : <input type="file" name="file" size="20" /><br />
    <input type="submit" value="Upload" name="ok" />
    </form>
</div>
</body>
</html>








