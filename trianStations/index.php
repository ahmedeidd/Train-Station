<?php
include"db.php";
include_once"insert.php";
include"headr.php"
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Egyptien-Trains قطارات مصر</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="sel">
<form method="post" action="showt.php">
<input type="text" name="leave" class="form-control" placeholder="محطة المغادرة">   
<input type="text" name="arrival" class="form-control" placeholder="محطة الوصول">  
<select name="stype" class="form-control">
    <option value="all">عرض جميع الدرجات</option>
    <option value="vip">VIP</option>
    <option value="mokeaf">مكيف</option>
    <option value="noom">نوم</option>
    <option value="exprise">اكسبريس</option>
</select>   
<input type="submit" name="sub" class="btn btn-danger" value="عرض القطارات">
</form>        
</div>

   
   
</div>
<?php
include"footer.php";    
    
