<?php
	session_start();
	 $title_bv = $_POST["title_BV"];
	 $noidung_bv = $_POST["noidung_BV"];
	 $id_user = $_SESSION['id_userlg'];
	 $id_baidang = $_SESSION['id_baichinhsua'];
  if(isset($_POST['ok'])){ // Người dùng đã ấn submit
      if($_FILES['file']['name'] != NULL){ // Đã chọn file
           // Tiến hành code upload file
		   if($_FILES['file']['type'] == "image/jpeg"
			|| $_FILES['file']['type'] == "image/png"
			|| $_FILES['file']['type'] == "image/gif"){
			  // là file ảnh
			  // Tiến hành code upload
			  if($_FILES['file']['size'] > 2048576){
			      echo "File không được lớn hơn 1mb";
			  }
			  else{
			      // file hợp lệ, tiến hành upload
			      $path = "data/"; // ảnh upload sẽ được lưu vào thư mục data
			      $tmp_name = $_FILES['file']['tmp_name'];
			      $name = $_FILES['file']['name'];
			      $type = $_FILES['file']['type']; 
			      $size = $_FILES['file']['size']; 
			      // Upload file
			      move_uploaded_file($tmp_name,$path.$name);
			      echo "<h1 align='center'>Completed</h1>";
			       $dbhost = 'localhost';
			         $dbuser = 'root';
			         $dbpass = '';  
			         $picture_bv = $path.$name;
			         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
			         if(! $conn )
			         {
			            die('Không thể lấy dữ liệu: ' . mysql_error());
			         }
			         mysql_select_db('bloglmht');
         			 $sqli = "Update baidang SET id_user = '$id_user', title = '$title_bv', noidung = '$noidung_bv', picture = '$picture_bv', ngay_dang = 'CURDATE()' WHERE id_bai = '$id_baidang'";
					if (mysql_query( $sqli, $conn)) {
					    echo "New record created successfully";
					   //unset($_SESSION['id_baichinhsua']);
					   header('Location: http://localhost:800/blog.lmht.com/Update/baidang.php');
				  }
				}
			}
				else{
				  // không phải file ảnh
				  echo "Kiểu file không hợp lệ";
				}
		  }else{
		  	echo "<h1 align='center'>ERR 555!</h1>";
	           echo "<h5 align='center'>Bạn Chưa chọn file</h5>";
	      }
	  }
?>
