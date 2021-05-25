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
                <div class="row ">
                    <div class="col-auto">
                        <div class="card shadow">
                            <div class="row m-2">
                                <div class="mr-auto">
                                    <img src="../asset/round-clock-icon-7486.png" alt="" class="img-fluid logo " style="width:70px">
                                </div>
                                <div class="ml-3">
                                    <h3>8 Hr.</h3>
                                    <span>เวลาทำงาน</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card shadow ml-2">
                            <div class="row m-2">
                                <div class="">
                                    <img src="../asset/thb_icon.png" alt="" class="logo">
                                </div>
                                <div class="ml-2">
                                    <h3>฿15,820</h3>
                                    <span>เงินเดือน เดือนนี้</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-auto">
                        <div class="card shadow col-12 ">
                            <div class="row">
                                <div class="col-auto m-2 ml">
                                    <h3>5 วัน</h3>
                                    <span>ลางานวันคงเหลือ</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row  mt-3">
                    <div class="card shadow col-6">
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
                    <div class="col-auto"></div>
                    <div class="card shadow col-5">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <h3>อบรม</h3>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <table class="col-12 table table-bordered  table-hover text-center">
                                    <thead>
                                        <th>ชื่อ</th>
                                        <th>วันที่</th>
                                        <th>เวลา</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ล้างห้องน้ำยังไงให้ไม่เปียก</td>
                                            <td>30-25-21</td>
                                            <td>10.00-17.00</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">

                    <div class="card col-6 shadow">
                        <div class="col-12 mt-3 ">
                            <h3>ประกาศ</h3>
                        </div>
                      
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>วันนี้งดใช้ห้องน้ำเพราะล้างไม่เสร็จ</th>
                                    <th>25 พฤษภาคม 2564</th>
                                </tr>
                                <tr>
                                    <th>เงินเดือนไม่ออกนะจากบอส</th>
                                    <th>25 พฤษภาคม 2564</th>
                                </tr>
                            </tbody>

                        </table>
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
    

    .logo {
        width: 70px;
    }
</style>