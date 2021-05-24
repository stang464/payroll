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
    <?php
    include('../component/sidebar.php')
    ?>
    <div class='main'>
        <div class=" mt-5 ml-5">

                <div class="col-10">
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
                                            <th>1</th>
                                            <th>dev001</th>
                                            <th>อารมณ์ ดี</th>
                                            <th>ลาอกหัก</th>
                                            <th>โดนแฟนทิ้งเมื่วานอยากนั่งทำใจริมทะเล</th>
                                            <th>3</th>
                                            <th>วันนี้</th>
                                            <th>มะรืน</th>
                                            <th>
                                                <button type="button" class="btn btn-danger">บ่</button>
                                                <button type="button" class="btn btn-success">ไปๆๆๆ</button>
                                            </th>
                                            
                                        </tr>
                                    </tbody>

                                </table>
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