<?php
include_once ("include/header.php");
include_once ("include/function.php");

// include_once ("include/sidebar.php");
?>
<div class="row">
<div class="col-lg-2" style="margin-right: 175px;" >
<ol class="breadcrumb" class="pull-right">
  <li><a href="index.php">الرئسية</a></li>
  <li class="active">تسجيل عضويه جديده</li>
</ol>
</div>
</div>
<article class="col-md-9 col-lg-9 art_bg " style="margin-right : 160px">

<div class="page-header">
  <h1><i class="fa fa-user-plus" aria-hidden="true"></i>   تسجيل عضويه جديده </h1>
</div>
 <div class="col-md-12" >
    <?php register(); ?>
 </div>
</article>

<?php
include_once ("include/footer.php");
?>