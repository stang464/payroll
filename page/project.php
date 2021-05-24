<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
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
            <div class="row">
                <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name Project</th>
                <th scope="col">Date Start-End</th>
                <th scope="col">Report</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Hello project</td>
                <td>17/01/65-18/02/66</td>
                <td><a class="btn btn-warning" href="../page/report.php">Send</a></td>
                <td><div class="btn btn-success"><a href=""></a> Detail</div></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Arigato</td>
                <td>5/07/66-18/02/67</td>
                <td><a class="btn btn-warning" href="../page/report.php">Send</a></td>
                <td><div class="btn btn-success">Detail</div></td>
            </tr>
        </tbody>
</table>
            </div>
        </div>
    </div>
    


    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>
</html>