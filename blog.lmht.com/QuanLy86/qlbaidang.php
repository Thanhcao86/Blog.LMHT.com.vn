<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Welcome to the Frontpage</title>

<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="home_files/template.css" type="text/css">

<!-- Menu head -->
<link href="home_files/ja.css" rel="stylesheet" type="text/css">
<link href="home_files/default.css" rel="stylesheet" type="text/css">
</head>
<body id="bd" class="wide fs3">

<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix">
	<h1 class="logo">
		<a href="#" title="Course Management System"><span>Course Management System</span></a>
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
		<form action="../New Folder/theme1/index.php" method="post">
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
		<div class="title-module">DANH SÁCH</div>
			<div class="filter">
          <div class="label">Nhap ten:</div>
          <div class="value">
          <form id="form1" name="form1" method="post" action="">
          <input type="text" name="start_time">
          <input type="submit" name="seach" value="seach">
				  </form>
        </div>  
         </div>
			  <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="30">Sửa</td>
							<td width="30">Xóa</td>
							<td width="150">ID</td>
							<td width="150">Ten</td>
                            <td width="150">Ngày Đăng</td>
                            <td width="150">Chitiet</td>
						</tr>
						<?php
	         $dbhost = 'localhost';
	         $dbuser = 'root';
	         $dbpass = '';
	         
	         $rec_limit = 10;
	         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
	         
	         if(! $conn )
	         {
	            die('Không thể lấy dữ liệu: ' . mysql_error());
	         }
	         mysql_select_db('bloglmht');
	         
	         /* lấy tổng số bản ghi */
	         $sql = "SELECT count(id_bai) FROM baidang ";
	         $retval = mysql_query( $sql, $conn );
	         
	         if(! $retval )
	         {
	            die('Không thể lấy dữ liệu: ' . mysql_error());
	         }
	         $row = mysql_fetch_array($retval, MYSQL_NUM );
	         $rec_count = $row[0];
	         
	         if( isset($_GET{'page'} ) )
	         {
	            $page = $_GET{'page'} + 1;
	            $offset = $rec_limit * $page ;
	         }
	         else
	         {
	            $page = 0;
	            $offset = 0;
	         }
	         $left_rec = $rec_count - ($page * $rec_limit);

	         $sql = "SELECT * ".
	            "FROM baidang "."ORDER BY id_bai DESC ".
	            "LIMIT $offset, $rec_limit";
	            
	         $retval = mysql_query( $sql, $conn );
	        // mysqli_set_charset($retval,'UTF8');
	         if(! $retval )
	         {
	            die('Không thể lấy dữ liệu: ' . mysql_error());
	         }
	         while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	         {
         	
           		echo "<tr>";
				echo "<td><a href='sualophoc.html'><img src='images/edit.gif' border='0'></a></td>";
				echo" <td><a href='#'><img src='images/deleted.jpg' border='0'></a></td>";
                
				echo "<td>$row[id_bai]</td>";
				echo "<td>$row[title]</td>";
				echo"<td>$row[ngay_dang]</td>";
				echo "<td><a href='../Update/checkin.php?id=$row[id_bai]'>Xem Chi Tiet</a></td>";
				echo "</tr>";
	         }
	         echo"</table>";
	         
	         if( $page > 0 )
	         {
	            $last = $page - 2;
	            echo "<span class='meta-nav'>&larr;</span><a href=\"?page=$last\">Recent Post</a> |";
	            echo "<a href=\"?page=$page\"> Older Post</a>";
	         }
	         //$_PHP_SELF
	         else if( $page == 0 )
	         { 
	         	echo "<div>";
	            echo "<span class='meta-nav'>&larr;</span><a href=\"?page=$page\">Older post</a>";
	            echo "</div>";
				}
				
	         else if( $left_rec < $rec_limit )
	         {
	            $last = $page - 2;
	            echo "<span class='meta-nav'>&larr;</span><a href=\"?page=$last\">Recent Post</a>";
	         }
	         
	         mysql_close($conn);
	      ?>						
					</table>
					<div class="task"><a href="themlophoc.html"><input type="button" value="Thêm mới" name="Thêm mới"></a>
									<input type="button" name="Xóa" value="Xóa"> 
									<a href="sualophoc.html"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					</div>
			    </div>
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<li id="current" class="active item1"><a href="?"><span>Danh sách tin tức</span></a></li>		
	</div>
	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>

<!-- END: FOOTER -->

</div>
<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
      	
      if(true)
      {
      	return confirm("xóa thành công");
      }
    }
   
</SCRIPT>



</body></html>