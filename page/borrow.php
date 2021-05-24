<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยืมพัสดุ</title>
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
        <div class=" mt-5 ml-5 ">
            <div class="row">
                <div class='col-sm-11'>
                    <div class="card">
                        <h5 class="card-header">ยืมพัสดุ</h5>
                        <div class="card-body">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label>รหัส</label>
                                        <input type="firstnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>ชื่อผู้ทำรายการ</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>วันทำรายการ</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>หมายเหตุ</label>
                                        <input type="lastnameth" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 ">
                                <div class="col">
                                    <input type="submit" value="ยืนยัน" class="btn btn-success">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-10 ml-5 mt-5">
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
                                                        <td>คืนเมื่อ 11//08/64</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">E0007</th>
                                                        <td>MacBook Air M1</td>
                                                        <td>อุปกรณ์อิเล็กทรอนิก</td>
                                                        <td>จูจู้</td>
                                                        <td>ใช้ในโปรเจค ZERO</td>
                                                        <td>ยืมเมื่อ 32/07/66</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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