<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <?php
    include('../component/nevbar.php');
    include('../component/sidebar.php');
    ?>


    <div class='main'>
        <div class="container mt-3">
            <h3>
                รายการเงินเดือน
            </h3>


            <div class="card">

                <div class="col-12 mt-3">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>payship ID</th>
                                <th>รหัสพนักงาน</th>
                                <th>ชื่อ</th>
                                <th>จำนวนเงิน</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>12324</th>
                                <th>123</th>
                                <th>ทองดี ฟันสะอาด</th>
                                <th>18000</th>
                                <th><button class="btn btn-warning">แก้ไข</button><button class="btn btn-danger">ลบ</button></th>
                            </tr>
                            <tr>
                                <th>12324</th>
                                <th>123</th>
                                <th>ทองดี ฟันสะอาด</th>
                                <th>18000</th>
                                <th><button class="btn btn-warning">แก้ไข</button><button class="btn btn-danger">ลบ</button></th>
                            </tr>
                            <tr>
                                <th>12324</th>
                                <th>123</th>
                                <th>ทองดี ฟันสะอาด</th>
                                <th>18000</th>
                                <th><button class="btn btn-warning">แก้ไข</button><button class="btn btn-danger">ลบ</button></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</body>

</html>

<style>

</style>