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
                <h5 class="card-header">เพิ่มรายการ</h5>
                <div class="card-body">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label>รหัสพัสดุ</label>
                                <input type="firstnameth" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>ชื่อพัสดุ</label>
                                <input type="lastnameth" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>ประเภท</label>
                                <input type="lastnameth" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>รายละเอียด</label>
                                <input type="lastnameth" class="form-control">
                            </div>
                        </div>
                    </div>
                    <h5 class="card-header">รายการพัสดุ</h5>
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">รหัส</th>
                                        <th scope="col">รายชื่อพัสดุ</th>
                                        <th scope="col">ประเภท</th>
                                        <th scope="col">รายละเอียด</th>
                                        <th scope="col">สถานะ</th>
                                        <th scope="col">แก้ไข</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">E0004</th>
                                        <td>กล้อง Blackmagic Pocket Cinema Camera 6K Pro</td>
                                        <td>อุปกรณ์อิเล็กทรอนิก</td>
                                        <td>ไม่มีฝาปิด</td>
                                        <td>จัดเก็บ</td>
                                        <td>
                                            <button type="button" class="btn btn-success">แก้ไข</button>
                                            <button type="button" class="btn btn-danger">ลบ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">E0007</th>
                                        <td>MacBook Air M1</td>
                                        <td>อุปกรณ์อิเล็กทรอนิก</td>
                                        <td></td>
                                        <td>เบิกจ่าย</td>
                                        <td>
                                            <button type="button" class="btn btn-success">แก้ไข</button>
                                            <button type="button" class="btn btn-danger">ลบ</button>
                                        </td>>
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