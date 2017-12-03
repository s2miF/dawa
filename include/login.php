<?php
session_start();
include_once("config.php");

if (isset($_POST['login'])){
	$user = stripcslashes(mysqli_real_escape_string($conn , $_POST ['username']));
	$password = md5 ($_POST['password']);
if (empty($user)){
	echo '<div class="alert alert-danger" role="alert">الرجاء ادخال اسم مستخدم</div>';
}
	elseif (empty($_POST ['password'])){
		echo '<div class="alert alert-danger" role="alert">الرجاءادخال كلمة المرور</div>';
	}
	else {
		$sql = mysqli_query ($conn , "SELECT * FROM `users` WHERE (`username` = '$user' OR `email` = '$user') AND `password` = '$password'");
		if (mysqli_num_rows($sql) != 1){
			echo '<div class="alert alert-danger" role="alert">اسم المستخدم او كلمة المرور غير صحيح</div>';
		}
		else {
		$user = mysqli_fetch_assoc ($sql);
		$_SESSION ['id'] = $user ['user_id'];
		$_SESSION ['username'] = $user ['username'];
		$_SESSION ['email'] = $user ['email'];
		$_SESSION ['password'] = $user ['password'];
		$_SESSION ['image'] = $user ['image'];
		$_SESSION ['date'] = $user ['reg_date'];
		$_SESSION ['role'] = $user ['role'];
		echo '<div class="alert alert-success" role="alert">تم تسجيل الدخول بنجاح</div>';
		echo '<meta http-equiv="refresh" content="1; \'index.php\' " />';
		}
	}
	
	}


?>