<?php

function register(){
	if (isset($_SESSION ['id'])){
	echo '<div class="alert alert-danger" role="alert">انت مسجل لدينا مسبقاَ</div>';
	}
	else {
		echo '
		<form action="include/register.php" method="post" class="form-horizontal" id="register">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">اسم المستخدم : </label>
    <div class="col-sm-6">
      <input type="username" class="form-control" name="username" id="username" placeholder="UserName">
    </div>
  </div>
    <div class="form-group">
    <label for="Email" class="col-sm-2 control-label">الايميل : </label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="Email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">الباسورد : </label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
    </div>
  </div>
      <div class="form-group">
    <label for="file" class="col-sm-2 control-label">الصورة الشخصيه : </label>
    <div class="col-sm-6">
      <input type="file" class="form-control" name="image" id="image">
    </div>
  </div>

  <div class="col-md-9" style="margin : 20px 0;"></div>
  <div class="col-md-9">
  <div id="result"></div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-3" style="margin-right : 300px;">
      <button type="submit" name="submit" class="btn btn-danger btn-block" ><i class="fa fa-pencil" aria-hidden="true"></i> تسجيل</button>
    </div>
  </div>
  
</form>';
	}
}

function log_area(){
	if (isset($_SESSION ['id'])){
	echo '
			<div class="panel panel-default">
         <div class="panel-heading"><b>اهلاَ بك '.ucwords($_SESSION['username']).'</b></div>
          <div class="panel-body">
		  <div calss="text-center" style="margin-bottom : 20px">
		    <img src="'.$_SESSION['image'].'" width="80px " style="margin-right : 90px" />
		  
		  </div>
		  <hr />
        <div class="col-md-12">
		<div class="row">
         <p><b>البريد الاكتروني : </b>'.$_SESSION['email'].'</p>
         <p><b>تاريخ التسجيل : </b>'.$_SESSION['date'].'</p>
		</div>
		</div>
        </div>
		<div class="panel-footer">
		<div class="col-md-12">
		<div class="row">
		<div class="col-md-6">
		<a href="" class="btn btn-info btn-sm pull-right ">الصفحة الشخصيه</a>
		</div>
		
		<div class="col-md-6">
		';
		if ($_SESSION ['role'] == 'admin'){
		echo '<a href="admin/index.php" class="btn btn-danger btn-sm pull-left ">لوحة التحكم</a>';
		}
		echo '
		</div>
		</div>
		</div>
		<div class="clearfix"></div>
		</div>
        </div>
	';
	}
	else {
		echo '
		<div class="panel panel-default">
         <div class="panel-heading"><b>تسجيل الدخول</b></div>
          <div class="panel-body">
		  <div calss="text-center" style="margin-bottom : 20px">
		    <img src="images/user.png" width="80px " style="margin-right : 90px" />
		  
		  </div>
		  <hr />
    		<form action="include/login.php" method="post" class="form-horizontal" id="login">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label"><i class="fa fa-user fa-2x" aria-hidden="true"></i></label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="username" name="username" placeholder="Email or username">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label"><i class="fa fa-lock fa-2x"  aria-hidden="true"></i></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
      <div id="log_result"></div>
  <div class="form-group">
    <div class="col-sm-10 pull-left">
      <button type="submit" name="login" class="btn btn-info">Sign in</button>
    </div>
	
  </div>
</form>
        </div>
		<div class="panel-footer"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> اذا لم تكن مسجل لدينا <a href="register.php">اضغط هنا </a></div>
        </div>
		';
	}
}
?>