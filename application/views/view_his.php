<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>his-regis</title>

     <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

<center><h1 style="margin-top:5%">ลงทะเบียน</h1></center>
    <div class="container" style="color: blue;">
 
    <div class="card text-center">
  <div class="card-header">
  <h3>ข้อมูลส่วนตัว</h3>
  </div>
  <div class="card-body">
    <h5 class="card-title"> </h5>
    <p class="card-text">ชื่อ: <?php echo $show['title'];?> <?php echo $show['fname'] ;?> <?php echo $show['lname'] ;?></p>
    <p class="card-text">เลขบัตรประชาชน : <?php echo $show['idcard'];?> </p>
    <p class="card-text">เพศ : <?php echo $show['sex'];?> </p>
    <p class="card-text">วันเกิด : <?php echo $show['date'];?> </p>
    <p class="card-text">อาชีพ : <?php echo $show['job'];?> </p>
  
  </div>
  <div class="card-footer text-muted">
    A moment ago
  </div>
</div>
    
 </div>

</body>
</html>