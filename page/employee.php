<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/layout.css">

</head>

<body>


    <?php include('../component/nevbar.php') ?>

    <div class="container-fluid">

        <h5>Employees</h5>
        <div class="row">
            <div class="col-2">
                <?php include('../component/sidebar.php') ?>
            </div>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
                <div class="card">
                    <div class="col-auto mt-2">
                        <div class="card-title ">พนักงานทั้งหมด</div>
                    </div>
                    <div class="col-auto ">
                        <div class="table-responsive"></div>
                        <table id='table' class='table table-striped table-bordered' style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>เล้ง</td>
                                    <td>เล้ง@email.com</td>
                                    <td>011111</td>
                                    <td><a href="payment.php" class="btn btn-sm btn-success">จ่ายเงินเดือน</a><a class='btn btn-sm btn-warning'>แก้ไขข้อมูล</a></td>
                                </tr>

                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>บุ๊ค</td>
                                    <td>บุ๊ค@email.com</td>
                                    <td>011111</td>
                                    <td><a href="payment.php" class="btn btn-sm btn-success">จ่ายเงินเดือน</a><a class='btn btn-sm btn-warning'>แก้ไขข้อมูล</a></td>
                                </tr>

                            </tbody>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>ตัง</td>
                                    <td>ตัง@email.com</td>
                                    <td>011111</td>
                                    <td><a href="payment.php" class="btn btn-sm btn-success">จ่ายเงินเดือน</a><a class='btn btn-sm btn-warning'>แก้ไขข้อมูล</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </main>

        </div>




    </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>

</html>