<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reported</title>
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
            <div class="display-5 mb-2">Reported</div>
            <div class="row">
                <div class="col-4">Employee 1</div>
                <div class="col-8">Describtion
                    <div class="row">
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                    </div>
                </div>
            </div>
            <a class="btn btn-success" href="../page/PMproject.php">ย้อนกลับ</a>
        </div>
    </div>
    


    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>