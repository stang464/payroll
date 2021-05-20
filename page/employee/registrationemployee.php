<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('../component/nevbar.php')
    ?>
    <?php
    include('../component/sidebar.php')
    ?>
    <div class='main'>
        <div class=" mt-5">
            <div class="row">
                
                <div class='col-5'>
                    <div class="card">
                        <h5 class="card-header">ลางาน</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>หัวข้อ</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>ตั้งแต่</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>ถึง</label>
                                        <input type="date" class="form-control">
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
                                            <option>ลากิจ</option>
                                            <option>ลาป่วย</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" value="ยืนยัน" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>หัวข้อ</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                     <tr>
                                         <th>1</th>
                                         <th>ลาไปบวช</th>
                                         <th>อนุมัติ</th>
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

</body>

</html>