<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">

    <link href="../css/index.css" rel="stylesheet">
</head>

<body>
    <?php
    include('../component/sidebar.php')
    ?>
    <?php
    include('../component/nevbar.php')
    ?>
    <div class="main">
        <div class="container">
            <div class="display-5 mb-2">Report</div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">หัวข้อ</label>
                    <input type="email" class="form-control" id="topic" placeholder="หัวข้อรายงาน">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">รายละเอียด</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="btn btn-success float-right ml-5">Send</div>
                <div class="btn btn-dark float-right">Clear</div>

            </form>
        </div>
    </div>


    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>