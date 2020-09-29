<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $this->load->view("factor/bootstrapcCssLink.php");
    ?>
    
    <title>การติดต่อ</title>
</head>
<body>
    <div class="container">
        <div class="card card-out" style="margin-top: 30px;">
            <div class="card-body card-body-in">
                <h4 align="left">การติดต่อ</h4>
                <div class="dropdown-divider"></div>
                <div align="center">
                    <form action="contact_show" method="POST">
                        <h5 align="left">ข้อมูลการติดต่อ</h5>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">อีเมล
                                <input class="form-control" type="email" placeholder="อีเมล" maxlength="" name="email" value="" required />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">หมายเลขโทรศัพท์
                                <input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์" maxlength="" name="tel" value="" required />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">Facebook
                                <input class="form-control" type="text" placeholder="อีเมล" maxlength="" name="facebook" value="" required />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">Line ID
                                <input class="form-control" type="text" placeholder="Line ID" maxlength="" name="line" value="" required />
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h5 align="left">ที่อยู่สำหรับการติดต่อ</h5>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
                                <input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="homea" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
                                <input class="form-control" type="number" placeholder="หมู่" maxlength="" name="mou" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
                                <input class="form-control" type="text" placeholder="ซอย" maxlength="" name="song" value="" required />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
                                <input class="form-control" type="text" placeholder="ถนน" maxlength="" name="road" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
                                <input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="tampon" value="" required />
                            </div>
                            <div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
                                <input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="ampor" value="" required />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
                                <input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="prov" value="" required />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
                                <input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="zipcode" value="" required />
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <a href=""><button type="submit" class="btn btn-primary">บันทึก</button></a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>