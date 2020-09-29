
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 	
    $this->load->view('url');
    ?>

</head>
<body>
    <div class="container"><br>
    <h1 align="center"><b>Views</b></h1>
<div class="dropdown-divider"></div>
<div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">ชื่อบริษัท
                                <input class="form-control" type="text" placeholder="ชื่อบริษัท" maxlength="" name="" value="<?php echo $show['name'];?>" readonly />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">ตำแหน่งงาน
                                <input class="form-control" type="text" placeholder="ตำแหน่งงาน" maxlength="" name="" value="<?php echo $show['work'];?>" readonly />
                            </div>
                            </div>
<div class="dropdown-divider"></div>
<h5 align="left">ที่อยู่ที่ทำงาน</h5><br>
                    <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                        <div class="form-group col-sm-4" style="margin-bottom: 0">บ้านเลขที่
                            <input class="form-control" type="number" placeholder="บ้านเลขที่" maxlength="" name="" value="<?php echo $show['adders'];?>" readonly />
                        </div>
                        <div class="form-group col-sm-4" style="margin-bottom: 0">หมู่
                            <input class="form-control" type="number" placeholder="หมู่" maxlength="" name="" value="<?php echo $show['moo'];?>" readonly />
                        </div>
                        <div class="form-group col-sm-4" style="margin-bottom: 0">ซอย
                            <input class="form-control" type="text" placeholder="ซอย" maxlength="" name="" value="<?php echo $show['s'];?>" readonly />
                        </div>
                    </div>
                    <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                        <div class="form-group col-sm-4" style="margin-bottom: 0">ถนน
                            <input class="form-control" type="text" placeholder="ถนน" maxlength="" name="" value="<?php echo $show['road'];?>" readonly />
                        </div>
                        <div class="form-group col-sm-4" style="margin-bottom: 0">ตำบล/แขวง
                            <input class="form-control" type="text" placeholder="ตำบล/แขวง" maxlength="" name="" value="<?php echo $show['t'];?>" readonly />
                        </div>
                        <div class="form-group col-sm-4" style="margin-bottom: 0">อำเภอ/เขต
                            <input class="form-control" type="text" placeholder="อำเภอ/เขต" maxlength="" name="" value="<?php echo $show['a'];?>" readonly />
                        </div>
                    </div>
                    <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                        <div class="form-group col-sm-6" style="margin-bottom: 0">จังหวัด
                            <input class="form-control" type="text" placeholder="จังหวัด" maxlength="" name="" value="<?php echo $show['prov'];?>" readonly />
                        </div>
                        <div class="form-group col-sm-6" style="margin-bottom: 0">รหัสไปรษณีย์
                            <input class="form-control" type="number" placeholder="รหัสไปรษณีย์" maxlength="" name="" value="<?php echo $show['zip'];?>" readonly />
                        </div>
                    </div>
                    <p style="max-width: 600px; font-size: 18px" align="left">หมายเลขโทรศัพท์ที่ทำงาน
                        <input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์ที่ทำงาน" maxlength="" name="" value="<?php echo $show['phone'];?>" readonly />
                    </p>
                    </div>
</body>
</html>

