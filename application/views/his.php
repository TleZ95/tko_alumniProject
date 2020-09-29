<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regis-his</title>
     <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <center> 
    <h1>ลงทะเบียน</h1></center>
    <form action="./his_regis" method="post" >

    <div class="container" style="color: blue;">
          <h3>ข้อมูลส่วนตัว</h3>
        </div>
        <br>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="title">คำนำหน้า</label>
            <select id="title" class="form-control" name="title">
              <option selected>นาย</option>
              <option>นาง</option>
              <option>นางสาว</option>
            </select>
          </div>
          <div class="form-group col-md-5">
            <label for="fname">ชื่อ</label>
            <input type="text" class="form-control" id="fname" placeholder="ชื่อ(ภาษาไทย)" name="fname">
          </div>
          <div class="form-group col-md-5">
            <label for="lname">นามสกุล</label>
            <input type="text" class="form-control" id="lname" placeholder="นามสกุล(ภาษาไทย)" name="lname">
          </div>
        </div>

        <div class="form-group">
          <label for="idcard">เลขบัตรประชาชน</label>
          <input type="text" class="form-control" id="idcard" placeholder="x-xxxx-xxx-xx-xx-x" name="idcard" maxlength="13">
        </div>
        <div class="form-row">

          <div class="form-group">
            <label for="select-sex">เพศ</label><br>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="ชาย">
              <label class="custom-control-label" for="customRadioInline1">ชาย</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="หญิง">
              <label class="custom-control-label" for="customRadioInline2">หญิง</label>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="date">วัน/เดือน/ปี เกิด</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="form-group col-md-6">
            <label for="job">อาชีพ/ตำแหน่งงาน</label>
            <input type="text" class="form-control" id="job" name="job" placeholder="อาชีพ/ตำแหน่งงาน">
          </div>

        </div>


        </div>
        <center>
       <input class="btn btn-success btn-block" style="margin-top: 20px; max-width: 500px" type="submit" name="submit">
    </center>
    </form>
    
    </div>
</body>
</html>