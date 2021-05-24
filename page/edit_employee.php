<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">


</head>

<body>
    <?php
    include('../component/sidebar.php')
    ?>
    <?php
    include('../component/nevbar.php')
    ?>
    <div class='main'>
        <div class=" mt-3 ml-5">
            <div class="row">
                <div class='col-sm-11'>
                    <div class="card">
                        <h5 class="card-header">ข้อมูลพนักงาน</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>รหัสประจำตัวพนักงาน</label>
                                        <input type="id" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>ชื่อ</label>
                                        <input type="firstnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>นามสกุล</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>ชื่อเล่น</label>
                                        <input type="nicknameth" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input type="firstnameen" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="lastnameen" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>Nickname</label>
                                        <input type="nicknameen" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>ตำแหน่ง</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>ฝ่าย</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>แผนก</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>ประเภท</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>วัน/เดือน/ปีเกิด</label>
                                        <input type="datepicker" class="form-control">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="form-group">
                                        <label>เพศ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="form-group">
                                        <label>น้ำหนัก</label>
                                        <input type="int" class="form-control">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="form-group">
                                        <label>ส่วนสูง</label>
                                        <input type="int" class="form-control">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="form-group">
                                        <label>กรุ๊ปเลือด</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>เชื้อชาติ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>สัญชาติ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input email="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>เบอร์โทร</label>
                                        <input type="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class='from-group'>
                                        <label>ที่อยู่</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class='from-group'>
                                        <label>ถนน</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="from-group">
                                        <label>ซอย</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="from-group">
                                        <label>อำเภอ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="from-group">
                                        <label>จังหวัด</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="from-group">
                                        <label>รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-2">
                                        <div class="from-group">
                                            <label>User</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="from-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="row mt-4 ">
                                <div class="col">
                                    <input type="submit" value="ยืนยัน" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>

            </div>
        </div>
    </div>
    
    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>