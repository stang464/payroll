<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">

    <link href="../css/index.css" rel="stylesheet">
</head>

<body>
    <?php
    include('../component/nevbar.php')
    ?>
    <?php
    include('../component/sidebar.php')
    ?>
    <div class='main'>
        <div class="row ml-5 mt-5">
            <div class="col-11 ml-2">
                <h5 class="card-header">ประวัติการเข้าร่วม</h5>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">วันที่</th>
                                    <th scope="col">รายการ</th>
                                    <th scope="col">จำนวน/ชั่วโมง</th>
                                    <th scope="col">ชื่อผู้เข้าร่วม</th>
                                    <th scope="col">ฝ่าย/แผนก</th>
                                    <th scope="col">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">22/11/64</th>
                                    <td>กระจงควรปลูกให้ห่างจากตัวบ้าน</td></td>
                                    <td>8</td>
                                    <td>บาบัมบอย</td>
                                    <td>dev</td>
                                    <td>เสร็จสิ้น</td>
                                </tr>
                                <tr>
                                    <th scope="row">15/05/65</th>
                                    <td>ดอยสูงขนาดไหนไม่ขายไม่ขาดทุน?</td>
                                    <td>6</td>
                                    <td>สลัมบอย</td>
                                    <td>finance</td>
                                    <td>ยกเลิก</td>
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