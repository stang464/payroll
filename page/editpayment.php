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
    include('../component/sidebar.php');
    ?>

    <div class="main">
        <div class=' mt-3 container'>
            <h5>งวดประจำเดือนพฤษภาคม 2564</h5>
            <div class="card">

                <div class="row mt-3 ml-1 mr-1">

                    <div class="col-6">
                        <table class='table table-bordered'>
                            <tbody>
                                <tr>
                                    <th>รหัสพนักงาน</th>
                                    <th>10510</th>
                                </tr>
                                <tr>
                                    <th> ชื่อ</th>
                                    <th>นายซัมบับเบ</th>
                                </tr>
                                <tr>
                                    <th>ตำแหน่ง</th>
                                    <th>หัวหน้า</th>
                                </tr>
                                <tr>
                                    <th>เพศ</th>
                                    <th>ชาย</th>
                                </tr>
                                <tr>
                                    <th>ฝ่าย</th>
                                    <th>เก็บกวาด</th>
                                </tr>
                                <tr>
                                    <th>เริ่มทำงาน</th>
                                    <th>05/05/2020</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table class='table table-bordered'>
                            <tbody>
                                <tr>
                                    <th>ธนาคาร</th>
                                    <th>กสิกรไทย</th>
                                </tr>
                                <tr>
                                    <th>เลขบัญชี</th>
                                    <th>07258458755</th>
                                </tr>
                                <tr>
                                    <th>ฐานเงินเดือน</th>
                                    <th>25,000</th>
                                </tr>
                                <tr>
                                    <th>ขาด</th>
                                    <th><input type="text" value="3"> /1000฿</th>
                                </tr>
                                <tr>
                                    <th>overtime</th>
                                    <th><input type="text" value="2"> hr./ 60฿</th>
                                </tr>
                                <tr>
                                    <th>มาสาย</th>
                                    <th>1 hr./ 142฿</th>
                                </tr>
                                <tr>
                                    <th>หักประกันสังคม</th>
                                    <th>1000฿</th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="" class="btn btn-success mt-3">เพิ่มรายการ</a>
            <table class="table table-bordered ">
                <thead>
                    <tr class="table-active">
                        <th>id</th>
                        <th>วันที่</th>
                        <th>รายการ</th>
                        <th>ราคา</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <th>159</th>
                        <th>11/05/64</th>
                        <th>เบิกค่ารถ</th>
                        <th>200</th>
                        <th><button class="btn btn-sm btn-warning">แก้ไข</button><button class="btn btn-sm btn-danger">ลบ</button></th>
                    </tr>
                    <tr class="table-danger">
                        <th>184</th>
                        <th>18/05/64</th>
                        <th>ทำกล้องพัง</th>
                        <th>-12500</th>
                        <th><button class="btn btn-sm btn-warning">แก้ไข</button><button class="btn btn-sm btn-danger">ลบ</button></th>
                    </tr>
                </tbody>
            </table>
            <div class="col-6">
                <table class="table table-bordered mt-3">


                    
                        <tbody>
                            <tr class="table-success">
                                <th>รวมที่ได้รับ</th>
                                <th>27,060</th>

                            </tr>
                            <tr class="table-danger">
                                <th>รวมที่หัก</th>
                                <th>16642</th>
                            </tr>
                            <tr >
                                <th class="table-primary">รวมจ่าย</th>
                                <th class="table-active">10,418</th>
                            </tr>
                        </tbody>
                    </table>
            </div>

           
            <div class="row mb-5">
                <div class="col-auto ml-auto">
                    <button class="btn btn-success">บันทึก</button>
                </div>
            </div>
        </div>



    </div>

</body>

</html>