<?php
include_once('config.php');
session_start();

   if (isset($_POST['submit'])){
	   
    $username = strip_tags($_POST ['username']);
	$email    = $_POST ['email'];
	$date = date("Y-m-D");
}
   if (empty($username)){
	echo '<div class="alert alert-danger" role="alert">الرجاء ادخال اسم مستخدم</div>';
   }  
   elseif (empty($email)){
	echo '<div class="alert alert-danger" role="alert">الرجاء ادخال الإيميل</div>';
   }  
   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo '<div class="alert alert-danger" role="alert">الرجاء ادخال الإيميل</div>';
   }   
   elseif (empty($_POST ['password'])){
	echo '<div class="alert alert-danger" role="alert">الرجاء ادخال كلمة المرور</div>';
   }  
   else{
	$sql_username = mysqli_query ($conn , "SELECT `username` FROM `users` WHERE `username` = '$username' ");
	$sql_email = mysqli_query ($conn , "SELECT `email` FROM `users` WHERE `email` = '$email'");
	if (mysqli_num_rows($sql_username) > 0 ){
		echo '<div class="alert alert-danger" role="alert">اسم المستخدم موجود مسبقاَ</div>';
	}
	elseif (mysqli_num_rows($sql_email) > 0){
		echo '<div class="alert alert-danger" role="alert">البريد الاكتروني موجود مسبقاَ</div>';
	}
	else{
	if(isset ($_FILES ['image'])){
		 $image = $_FILES ['image'];
		 $image_name = $image['name'];
		 $image_tmp = $image['tmp_name'];
		 $image_error = $image['error'];
		 $image_size = $image['size'];
		 
		 $image_exe = explode ('.' , $image_name);
		 $image_exe = strtolower (end($image_exe));
		 $image_type = array ('png','gif','jpg','jpeg');
	 
     if (in_array ($image_exe , $image_type)){	 
	    if ($image_error === 0){
			$new_name = uniqid('user', false) . '.' . $image_exe;
			$image_dir = '../images/avatar/' . $new_name;
			$image_db = 'images/avatar/' . $new_name;
		if (move_uploaded_file ($image_tmp , $image_dir)){
		$password = md5 ( $_POST['password']);
		$insert = "INSERT INTO `users` (`username` , `email` , `password` , `image` , `reg_date`,`role`) VALUES('$username','$email','$password','$image_db','$date','user')";
		$insert_sql = mysqli_query($conn , $insert);
		if (isset($insert_sql)){
		$user_info = mysql_query ($conn , "SELECT * FROM `users` WHERE `username` = '$username' ");
		$user = mysqli_fetch_assoc($user_info);
		$_SESSION ['id'] = $user ['user_id'];
		$_SESSION ['username'] = $user ['username'];
		$_SESSION ['email'] = $user ['email'];
		$_SESSION ['password'] = $user ['password'];
		$_SESSION ['image'] = $user ['image'];
		$_SESSION ['date'] = $user ['reg_date'];
		$_SESSION ['role'] = $user ['role'];
		echo '<div class="alert alert-success" role="alert">تم تسجيلك بنجاح</div>';
		echo '<meta http-equiv="refresh" content="3; \'index.php\' " />';
		}
		}
		else {
			echo"it was wrong";
		}
		}
		else{
			echo '<div class="alert alert-danger" role="alert">حدث خطاء في الادخال</div>';
		}
	 } else{
	echo '<div class="alert alert-danger" role="alert">الرجاء ادخال صورة صحيحة</div>';
   }
}
else {
		$password = md5 ( $_POST['password']);
		$insert = "INSERT INTO `users` (`username` , `email` , `password` , `image` , `reg_date`,`role`) VALUES('$username','$email','$password','images/user.png','$date','user')";
		$insert_sql = mysqli_query($conn , $insert);
		if (isset($insert_sql)){
		$user_info = mysqli_query ($conn , "SELECT * FROM `users` WHERE `username` = '$username' ");
		$user = mysqli_fetch_assoc($user_info);
		$_SESSION ['id'] = $user ['user_id'];
		$_SESSION ['username'] = $user ['username'];
		$_SESSION ['email'] = $user ['email'];
		$_SESSION ['password'] = $user ['password'];
		$_SESSION ['image'] = $user ['image'];
		$_SESSION ['date'] = $user ['reg_date'];
		$_SESSION ['role'] = $user ['role'];
		echo '<div class="alert alert-success" role="alert">تم تسجيلك بنجاح</div>';
		echo '<meta http-equiv="refresh" content="3; \'index.php\' " />';
		}
	}
   }
   }
   
?> 