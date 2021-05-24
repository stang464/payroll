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
    include('../component/nevbar.php');
    ?>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-2">
                <?php
                include('../component/sidebar.php');
                ?>
            </div>
            
        </div>
        
        <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 mt-3">
        <h3>อนุมัติเบิกจ่าย</h3>
        <hr>

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสพนักงาน</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>ประเภท</th>
                                    <th>หมายเหตุ</th>
                                    <th>จำนวน</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>dev001</th>
                                    <th>อารมณ์ ดี</th>
                                    <th>ค่าเดินทาง</th>
                                    <th>ค่ารถเดินทางอบรมจับกบ</th>
                                    <th>300</th>
                                    <th>รออนุมัติ</th>
                                    <th><button type="button" class="btn btn-success">อนุมัติ</button>
                                        <button type="button" class="btn btn-danger">ไม่อนุมัติ</button>
                                    </th>

                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

        </main>
    </div>
    </div>
    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>