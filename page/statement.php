<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">

    <link href="../css/layout.css" rel="stylesheet">
</head>

<body>
    <?php
    include('../component/nevbar.php');

    ?>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-2">
                <?php
                include('../component/sidebar.php');
                ?>
            </div>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 mt-3">
                <div class="col-12">
                    <h5 class="card-header">บัญชีบริษัท</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <form action="">
                                        <label for="">ประเภท</label>
                                        <select name="" id="">
                                            <option value="">-</option>
                                            <option value="">รายรับ</option>
                                            <option value="">รายจ่าย</option>
                                        </select>

                                        <label for="">วันที่</label>
                                        <input type="text" name="" id="">
                                        <label for="">เดือน</label>
                                        <select name="" id="">
                                            <option value="">-</option>
                                            <option value="">มกราคม</option>
                                            <option value="">กุมภาพันธ์</option>
                                            <option value="">มีนาคม</option>
                                            <option value="">เมษายน</option>
                                            <option value="">พฤษภาคม</option>
                                            <option value="">มิถุนายน</option>
                                            <option value="">กรกฎาคม</option>
                                            <option value="">สิงหาคม</option>
                                            <option value="">กันยายน</option>
                                            <option value="">ตุลาคม</option>
                                            <option value="">พฤศจิกายน</option>
                                            <option value="">ธันวาคม</option>
                                        </select>
                                        <label for="">ปี</label>
                                        <input type="text" name="" id="">
                                        <a href="" class="btn btn-sm btn-secondary">reset</a>
                                        <a href="" class="btn btn-sm btn-primary">ค้นหา</a>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>วันที่</th>
                                        <th>ประเภท</th>
                                        <th>รายการ</th>
                                        <th>จำนวน</th>
                                        <th>หมายเหตุ</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>24-5-21</th>
                                        <th>รายจ่าย</th>
                                        <th>เงินเดือนมกราคม</th>
                                        <th>150000000</th>
                                        <th>-</th>
                                        <th><a class="ml-1 btn btn-warning btn-sm" href="">แก้ไข</a></th>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>24-5-21</th>
                                        <th>รายรับ</th>
                                        <th>Project งาน...</th>
                                        <th>590000</th>
                                        <th>-</th>
                                        <th><a class="ml-1 btn btn-warning btn-sm" href="">แก้ไข</a></th>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>24-5-21</th>
                                        <th>รายรับ</th>
                                        <th>Project งาน...</th>
                                        <th>12526</th>
                                        <th>-</th>
                                        <th><a class="ml-1 btn btn-warning btn-sm" href="">แก้ไข</a></th>
                                    </tr>
                                </tbody>

                            </table>
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