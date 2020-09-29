<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<h1 align="center"><b>Input</b></h1>
<div class="dropdown-divider"></div>
                        <h5 align="left">ประวัติการทำงาน</h5>
                        <br>
                            
                            <form action="welcome/get_form" method="post">
                            <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">ชื่อบริษัท
                                <input class="form-control" type="text" placeholder="ชื่อบริษัท" maxlength="" name="name" value="" required />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">ตำแหน่งงาน
                                <input class="form-control" type="text" placeholder="ตำแหน่งงาน" maxlength="" name="work" value="" required />
                            </div>
                            </div>
            
                        <div class="dropdown-divider"></div>
                        <p><b>ที่ทำงานปัจุบัน</b></p>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
                                <input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="home" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
                                <input class="form-control" type="number" placeholder="หมู่" maxlength="" name="moo" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
                                <input class="form-control" type="text" placeholder="ซอย" maxlength="" name="s" value="" required />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
                                <input class="form-control" type="text" placeholder="ถนน" maxlength="" name="road" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
                                <input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="t" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
                                <input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="a" value="" required />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
                                <input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="prov" value="" required />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
                                <input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="zip" value="" required />
                            </div>
                        </div>
                        <p style="max-width: 600px; font-size: 18px" align="left">หมายเลขโทรศัพท์ที่ทำงาน
                            <input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์ที่ทำงาน" maxlength="" name="phone" value="" required />
                        </p>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        </form>
                    </div>
</body>
</html>