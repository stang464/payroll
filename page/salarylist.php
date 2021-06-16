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
    ?>


    <div class='container-fluid'>
        <div class="row">
            <div class="col-2">
                <?php include('../component/sidebar.php') ?>
            </div>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 mt-3">
                <h3>
                    รายการเงินเดือน 05/2021
                </h3>

                <div class="row">
                    <div class="col-5">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="col-12 ">
                                    <h5>พนักงาน 99 คน</ฟ>
                                </div>
                                <div class="col-12 ">
                                    <h5>รวมทั้งสิ้น 1284510.05 ฿</ฟ>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <button class="btn btn-lg btn-success">อนุมัติ</button>
                    </div>
                </div>




                <div class="card">

                    <div class="col-12 mt-3">

                        <table class="table table-bordered text-center">
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
                                    <th><a href="editpayment.php" class="btn btn-primary">รายละเอียด</a><button class="btn btn-danger">ลบ</button></th>
                                </tr>
                                <tr>
                                    <th>12324</th>
                                    <th>123</th>
                                    <th>ทองดี ฟันสะอาด</th>
                                    <th>18000</th>
                                    <th><button class="btn btn-primary">รายละเอียด</button><button class="btn btn-danger">ลบ</button></th>
                                </tr>
                                <tr>
                                    <th>12324</th>
                                    <th>123</th>
                                    <th>ทองดี ฟันสะอาด</th>
                                    <th>18000</th>
                                    <th><button class="btn btn-primary">รายละเอียด</button><button class="btn btn-danger">ลบ</button></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

        </div>



    </div>


</body>

</html>

<style>

</style>