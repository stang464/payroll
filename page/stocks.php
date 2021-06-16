<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คลังพัสดุ</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">

    <link href="../css/index.css" rel="stylesheet">
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
                        <h5 class="card-header">ประวัติ</h5>
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">รหัส</th>
                                            <th scope="col">รายชื่อพัสดุ</th>
                                            <th scope="col">ประเภท</th>
                                            <th scope="col">ชื่อผู้ทำรายการ</th>
                                            <th scope="col">หมายเหตุ</th>
                                            <th scope="col">สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">E0004</th>
                                            <td>กล้อง Blackmagic Pocket Cinema Camera 6K Pro</td>
                                            <td>อุปกรณ์อิเล็กทรอนิก</td>
                                            <td>เกียวเจียว</td>
                                            <td>ฝาปิดกล้องหาย</td>
                                            <td>จัดเก็บ</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">E0007</th>
                                            <td>MacBook Air M1</td>
                                            <td>อุปกรณ์อิเล็กทรอนิก</td>
                                            <td>จูจู้</td>
                                            <td>ไม่มีอะไรเสียหาย</td>
                                            <td>ยืม</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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