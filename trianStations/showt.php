<?php
include"db.php";
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
</nav><br>
<div class="container">
<?php
    
if(isset($_POST['sub'])){
$leave=$_POST['leave'];
$arrival=$_POST['arrival'];
$stype=$_POST['stype'];
    
$sdas=$con->prepare("select * from timing where start_station=? and 	end_station=? and degree=?");
$sdas->execute(array($leave,$arrival,$stype));    
$rows=$sdas->fetchAll();
$c=$sdas->rowCount();
$c=$sdas->rowCount();
echo"<div class='panel panel-danger'>من $leave الى $arrival يوجد$c قطار</div>";   
echo"<table  style='margin:20px auto' class='table'>";
echo"<tr>";
echo"<th>قطار</td>";
echo"<th>قيام</td>";  
echo"<th>وصول</td>"; 
echo"<th>المدة</td>";  
echo"<th>السرعة</td>";  
echo"<th>الدرجة</td>";      
echo"<tr>";    
   
foreach($rows as $row){
    echo"<tr>";
    echo "<td>". $row['train_id']."</td>";
     echo "<td>". $row['start_time']."</td>";
     echo"<td>". $row['end_time']."</td>";
     echo"<td>". $row['duration']."</td>";
      echo "<td>". $row['speed']."</td>";
     echo "<td>". $row['degree']."</td>";
     
}

   
 echo"<table>";   
}    
  ?>
    </div>
<?php

include"footer.php";  