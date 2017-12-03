<?php
include_once ("include/header.php");
// include_once ("include/sidebar.php");
?>

<article class="col-md-9 col-lg-9 art_bg " style="margin-right : 160px">
<ol class="breadcrumb" class="pull-right">
  <li><a href="index.php">الرئسية</a></li>
  <li><a href="#">القسم</a></li>
  <li class="active">المقال</li>
</ol>
 <div class="col-lg-12">
 <div class="row">
 <div class="cate_post">
  <h2 class="cat_h2">عنوان المقاله</h2>
            <div class="col-md-12">
           <img src="http://english.republika.mk/wp-content/uploads/2014/08/fountain-pen-writing.jpg" width="100%" />
                </div>
				
               <div class="col-md-12">
			   <div class="col-md-12 athour_id">
			<p class="pull-right"> <i class="fa fa-pencil" aria-hidden="true"></i><a href="profile.php" style="color : white;"> سامي</a></p>
            <p class="pull-left"> <?php echo date("d-m-Y");?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
			</div>
                 <hr/> 
                <p>
 لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص
               </p>
			</div>  
			<div class="col-md-12">
			<hr style="margin-bottom : 9px;"/>  
            </div>
	   <div class="clearfix"></div>
</div>
 
 </div>
 </div>

</article>
<!-- comment area -->
<div class="col-md-9 " style="margin-right : 160px; margin-top : 30px;">
<div class="row">
<div class="cate_post">
            <div class="col-md-2">
           <img src="http://english.republika.mk/wp-content/uploads/2014/08/fountain-pen-writing.jpg" width="100%" />
                </div>
               <div class="col-md-10">
                  <h2 class="cat_h2"><i class="fa fa-comments" aria-hidden="true"> التعليق </i></h2>
                <p>
 لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص
               </p>
			</div>  
			<div class="col-md-12">
			
			<hr style="margin-bottom : 9px;"/>
            <p class="pull-left"><?php echo date("d-m-Y");?>  <i class="fa fa-clock-o" aria-hidden="true"></i></p> 
            <p class="pull-right"> <i class="fa fa-pencil" aria-hidden="true"></i> تم التعليق بواسطة : <a href="profile.php"> سامي</a> </p>
            </div>
	   <div class="clearfix"></div>
</div> 
</div> 


</div>

<!-- comment area -->
 <div class="col-lg-9 art_bg" style="margin-top : 20px; padding-top : 15px; margin-right : 160px;">
    <h2 style="margin-right : 20px;"><i class="fa fa-comment" aria-hidden="true"></i> اضف تعليق جديد </h2><hr/>
 <form class="form-horizontal">
  <div class="form-group">
 
    <label for="username" class="col-sm-3 control-label">اسم المستخدم</label>
    <div class="col-sm-3">
      <input type="username" class="form-control" id="username" placeholder="username">
    </div>
  </div>
  <div class="form-group">

    <label for="text" class="col-sm-3 control-label">تعليقك</label>
    <div class="col-sm-6">
      <textarea type="text" class="form-control" id="text" placeholder="تعليقك" rows="5"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-danger">اضف التعليق</button>
    </div>
  </div>
</form>
 </div>

<?php
include_once ("include/footer.php");
?>