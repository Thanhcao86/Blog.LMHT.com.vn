<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login_style.css">
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="login_effect.js"></script>
	</head>
	   
	<body>
	
	 <div class = "form">
		  <form >
			   <h1>Login Form</h1>
			   <ul>
			    <li class="tab"><a href="../main.php">Back to Main</a></li>
				<li class="tab"><a id="dangky" href="../login/resign.php">Go SignUp</a></li>
				</ul>
				</p>
			   <input type = "text" id = "login" placeholder = "input userid" name = "uid">
			   <input type = "text" id = "password"  placeholder = "input passwords" name = "ups">
			   <input type = "button" id="dologin" value = "Login" onclick="responsivePHP()">
		  </form>
		  <li>Thông báo</li>
		  <div id="result">

          </div>
	 </div>

	</body>
</html>