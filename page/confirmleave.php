<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อนุมัติวันลา</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">

    <link href="../css/index.css" rel="stylesheet">
</head>

<body>
    <?php
    include('../component/nevbar.php')
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <?php include('../component/sidebar.php') ?>
            </div>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 ">
                <div class="card">
                    <div class="col-auto mt-2">
                        <h5 class="card-header">อนุมัติวันลา</h5>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered text-center text-sm">
                                    <thead>
                                        <tr>
                                            <th>ที่</th>
                                            <th>รหัส</th>
                                            <th>ชื่อ-นามสกุล</th>
                                            <th>ประเภท</th>
                                            <th>หมายเหตุ</th>
                                            <th>จำนวนวัน</th>
                                            <th>ตั่งแต่วันที่</th>
                                            <th>ถึงวันที่</th>
                                            <th>สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>dev001</td>
                                            <td>อารมณ์ ดี</td>
                                            <td>ลาอกหัก</td>
                                            <td>โดนแฟนทิ้งเมื่วานอยากนั่งทำใจริมทะเล</td>
                                            <td>3</td>
                                            <td>วันนี้</td>
                                            <td>มะรืน</td>
                                            <td>
                                                <button type="button" class="btn btn-danger">บ่</button>
                                                <button type="button" class="btn btn-success">ไปเตอะ</button>
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