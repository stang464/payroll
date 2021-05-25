<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="../css/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <?php
    include('../component/nevbar.php')
    ?>


    <div class='container-fluid'>
        <div class="row">
            <div class="col-2">
                <?php
                include('../component/sidebar.php')
                ?>
            </div>

            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 mt-3">
                <div class="card col-2">
                    <div class="row m-2">
                        <div class="mr-auto">
                            <img src="../asset/round-clock-icon-7486.png" alt="" class="img-fluid logo " style="width:70px">
                        </div>
                        <div class="ml-auto">
                            <h3>8 Hr.</h3>
                            <span>เวลาทำงาน</span>
                        </div>
                    </div>


                </div>



                <div class="card col-6 mt-3">
                    <div class="row ">
                        <div class="col-12 mt-3">
                            <h3>งานที่ได้รับมอบหมาย</h3>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover table-bordered text-center">
                                <thead>
                                    <th>Project</th>
                                    <th>เริ่มวันที่</th>
                                    <th>ส่ง</th>
                                    <th>รายละเอียด</th>
                                    <th>จัดการ</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>ล้างห้องน้ำ</th>
                                        <th>22-5-21</th>
                                        <th>22-5-21</th>
                                        <th>ล้างชั้น 2 - 3</th>
                                        <th>
                                            <a href="" class="btn btn-sm btn-primary " title="รายละเอียด"><i class="bi bi-justify"></i></a>
                                            <a href="" class="btn btn-sm btn-warning " title="update"><i class="bi bi-clipboard"></i></a>
                                            <a href="" class="btn btn-sm btn-success" title="สำเร็จ"><i class="bi bi-check2"></i></a>

                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>






                </div>
            </main>
        </div>

    </div>





    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>

<style>
    .card {
        border-radius: 10px;
    }

    .logo {
        width: 70px;
    }
</style>