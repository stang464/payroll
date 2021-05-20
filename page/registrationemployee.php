<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('../component/sidebar.php')
    ?>
    <?php
    include('../component/nevbar.php')
    ?>
    <div class='main'>
        <div class=" mt-5">
            <div class="row">
                
                <div class='col-10 ml-4'>
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
                                        <label>วัน/เดือน/ปีเกิด</label>
                                        <input type="date" class="form-control">
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

                            </div>
                            <div class="row">
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
</body>

</html>