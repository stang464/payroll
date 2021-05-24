<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">

    <link href="../css/layout.css" rel="stylesheet">
</head>

<body>
    <?php
    include('../component/nevbar.php')
    ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-2">
                <?php
                include('../component/sidebar.php')
                ?>
            </div>

            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
                <h3>เบิกเงิน</h3>
                <hr>
                <div class="row">
                    <div class='col-6'>
                        <div class="card">
                            <h5 class="card-header">ขอเบิก</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>หัวข้อ</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <label>คำอธิบาย</label>
                                            <textarea class="form-control" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">ประเภท</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>เบิกล่วงหน้า</option>
                                                <option>เบิกค่าเดินทาง</option>
                                                <option>เบิกค่ารักษา</option>
                                                <option>อุปกรณ์</option>
                                                <option>อื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">

                                    <div class="col-12">
                                        <label for="">จำนวน</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="from-group">
                                            <label for="">แนบหลักฐาน</label>
                                            <input type="file" name="" id="" class="form-control-file">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="submit" value="ยืนยัน" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>วันที่</th>
                                            <th>หัวข้อ</th>
                                            <th>สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>05-12-21</th>
                                            <th>เบิกค่ารถ</th>
                                            <th>รออนุมัติ</th>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


        </div>

</body>

</html>