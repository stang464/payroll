<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขคลังพัสดุ</title>
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
                        <h5 class="card-header">อนุมัติเบิกประกัน</h5>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">รหัสพนักงาน</th>
                                                    <th scope="col">ชื่อ-นามสกุล</th>
                                                    <th scope="col">ประเภท</th>
                                                    <th scope="col">วันที่</th>
                                                    <th scope="col">รายละเอียด</th>
                                                    <th scope="col">ยืนยัน</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">D0004</th>
                                                    <td>บา โบซ่า</td>
                                                    <td>อุบัติเหตุ</td>
                                                    <td>21/05/64</td>
                                                    <td>รถล้มหน้าสำนักงาน</td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">ยืนยัน</button>
                                                        <button type="button" class="btn btn-danger">ลบ</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">D0007</th>
                                                    <td>สลัม บัมเบย</td>
                                                    <td>ประกันสุขภาพ</td>
                                                    <td>24/06/66</td>
                                                    <td>มะเร็งระยะสุดท้าย</td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">ยืนยัน</button>
                                                        <button type="button" class="btn btn-danger">ลบ</button>
                                                    </td>
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