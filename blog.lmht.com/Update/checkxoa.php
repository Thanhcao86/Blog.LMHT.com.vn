<?php
		$id_baidang = $_GET["id"];
 		$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn )
         {
            die('Không thể lấy dữ liệu: ' . mysql_error());
         }
         mysql_select_db('bloglmht');
         $query = "DELETE FROM baidang WHERE id_bai = '$id_baidang'";
         $retval = mysql_query( $query, $conn );
         $delete = "DELETE FROM comment WHERE id_baidang = '$id_baidang'";
         $retval2 = mysql_query( $delete, $conn );
         	echo "xoa thanh cong";
         	header('Location: http://localhost:800/blog.lmht.com/Update/baidang.php');
?>