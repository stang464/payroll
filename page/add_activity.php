<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Employee</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">


</head>

<body>
    <?php
    include('../component/nevbar.php')
    ?>
    <div class="container-fluid">

        <h5>Employees</h5>
        <div class="row">
            <div class="col-2">
                <?php include('../component/sidebar.php') ?>
            </div>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
                <div class="card">
                    <div class="col-auto mt-2">
                        <h5 class="card-header">เพิ่มรายการจัดอบรมพนักงาน</h5>
                        <div class="card-body">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>วันที่</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>เวลาเริ่มอบรม</label>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>เวลาจบการอบรม</label>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>รายการ</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>ฝ่ายที่เข้าร่วม</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>เพิ่มเติม</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 ">
                                <div class="col">
                                    <input type="submit" value="ยืนยัน" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="../css/js/bootstrap.js"></script>
                <script src="../css/js/popper.js"></script>
                <script src="../css/js/slim.js"></script>
</body>

</html>