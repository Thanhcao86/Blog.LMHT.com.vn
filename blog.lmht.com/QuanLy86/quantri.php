<!DOCTYPE>
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Welcome to the Frontpage</title>


<link rel="stylesheet" href="home_files/template.css" type="text/css">

<!-- Menu head -->
<link href="home_files/ja.css" rel="stylesheet" type="text/css">
<link href="home_files/default.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body id="bd" class="wide fs3">
<div id="ja-wrapper">
<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix">
	<h1 class="logo">
		<a href="#" title="SYSTEM MANAAGER IS TURN ON"><span>SYSTEM MANAGER TURN ON</span></a>
	</h1>
</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<div id="ja-mainnavwrap">
	<div id="ja-mainnav">
		<ul id="ja-cssmenu" class="clearfix">
			<li class=""><a href="qltintuc.php" class="menu-item0" id="menu1" title="Home"><span class="menu-title">QL Tin Tức</span></a></li> 
			<li class=""><a href="qlbaidang.php" class="menu-item2" id="menu83" title="FAQs"><span class="menu-title">QL Bài Đăng</span></a></li> 
			<li class=""><a href="qluser.php" class="menu-item3" id="menu85" title="Forums"><span class="menu-title">QL User</span></a></li> 
			<li class=""><a href="thongke.php" id="menu86" title="Documentation (Beta)"><span class="menu-title">Thống kê</span></a></li> 
			<li class="active"><a href="quantri.php" class="active" id="menu86 active first-item" title="Documentation (Beta)"><span class="menu-title">Hệ thống</span></a></li> 
			<li class=""><a href="#" id="menu86" title="Documentation (Beta)"><span class="menu-title">Đăng xuất</span></a></li> 
		</ul>
	</div>

	<div id="ja-search">
		<form action="index.php" method="post">
		<div class="search">
			<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox" size="20" value="search..." onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" type="text">	</div>
		<input name="task" value="search" type="hidden">
		<input name="option" value="com_search" type="hidden">
		</form>
	</div>
	
</div>

<!-- END: MAIN NAVIGATION -->



<div id="ja-containerwrap-fr">
<div id="ja-container">
<div id="ja-container2" class="clearfix">

<div id="ja-mainbody" class="clearfix">

<!-- BEGIN: CONTENT -->
	<div class="title-module">Thông Tin Admin</div>
				<div class="filter">
					<div class="label">Tên đăng nhập</div>
					<div class="value"><input type="text" name="code" size="20"></div>					
					<div class="label">Nhóm quyền</div>
					<div class="value">
						<select>
							<option selected="selected"></option>
							<option>admin</option>
							<option>Quản lý đào tạo</option>
							<option>Quản lý tài chính</option>							
						</select>
					</div>					
					<div class="search"><input type="button" value="Tìm" name="search"></div>
				</div>
			  <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="10"><input type="checkbox"></td>
							<td width="30">Sửa</td>
							<td width="30">Xóa</td>
							<td width="100">Tên đăng nhập</td>
							<td width="150">Họ tên</td>													
							<td width="150">Email</td>
							<td width="70">SĐT</td>
							<td width="100">Nhóm quyền</td>	
						
				
					</table>
					<div class="task"><a href="themuser.html"><input type="button" value="Thêm mới" name="Thêm mới"></a>
									<input type="button" name="Xóa" value="Xóa"> 
									<a href="suauser.html"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					</div>
			    </div>
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<li id="current" class="active item1"><a href="user.html">Quản trị người sử dụng</a></li>
			<li class="item82"><a href="phanquyen.html">Phân quyền người sử dụng</a></li>
			<li class="item85"><a href="dsmonhoc.html"><a href="changepass.html">Đổi mật khẩu</a></li>			
			</ul>		
	</div>
	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>
</div>



</body></html>