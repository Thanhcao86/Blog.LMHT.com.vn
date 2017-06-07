<!DOCTYPE html>
<html>
<head>
	<title>Thảo Luận </title>
	<link rel="stylesheet" type="text/css" href="baidang.css">
	<meta charset="utf-8">
</head>
<body>
<div class="nav_char">
	<?php
	session_start(); 
		// echo "Ten cua ban la : ".$_SESSION['id_userlg']; 
	
    	 $id_user = $_SESSION['id_userlg'];
	 	 $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         
         $rec_limit = 10;
         $conn1 = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn1 )
         {
            die('Không thể lấy dữ liệu: ' . mysql_error());
         }
         mysql_select_db('bloglmht');
         $name_user = "SELECT * FROM user Where id_user = $id_user";
         $retval2 = mysql_query( $name_user, $conn1 );
         $krow = mysql_fetch_array($retval2);
	?>
	<ul>
	<?php
		echo "<li><button><a href='../main.php'>Back To Home</a></button></li>";
		
		echo"<li><button><a href='addpost.php'>Submit A Post</a></button></li>";
		echo "</p>";
		echo"<li><button><a href='userfolder/userinformation.php'>User information</a></button></li>";
		echo "</p>";
		 
         echo"</ul>";
          if($krow >0)
         {
         	echo"<li>";
         	echo"Welcome: ".$krow[1];
         	echo "</li>";
         }
         echo "<p align ='right'><a href='checklogout.php'><input type = 'submit' id='logout' value = 'logout' onclick='logout()'></a></p>";
	?>
</div>
<
<div class ="menu">

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
          echo "<table class='helo' border='1'>";
            echo "<tr>";
					echo"<td>Id-User</td>";
					echo"<td>Code</td>";
					echo"<td>Title</td>";
					echo"<td>Profile</td>";
					echo"<td>Delete</td>";
			echo"</tr>";
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
         {
         	
           		echo "<tr>";
                echo "<td>$row[id_user]</td>";
				echo "<td>$row[id_bai]</td>";
				echo "<td>$row[title]</td>";
				echo"<td><a href='checkin.php?id=$row[id_bai]'>Xem Thêm</a></td>";
				if($row['id_user']==$id_user || $id_user=='-1'){
	
					echo"<td><a onclick='return confirmAction()' href='checkxoa.php?id=$row[id_bai]'><input type='submit' onclick='confirmAction()' value='Delete'></a></td>";
				}
				else{
					echo"<td><a href='../LoginForm%20(Ajax)/index.php'>You have login contanit the id</a></td>";
				}
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
</div>
</div>

<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
      	
      if(true)
      {
      	return confirm("xóa thành công");
      }
    }
   
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
function logout(){

	return confirm("Bạn Có muốn thoát?");
	if(true){
	
	}
}
</SCRIPT>
</body>
</html>