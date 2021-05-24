<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
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
            <div class="display-5 mb-2">Add Project</div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputProjectName">ชื่อโปรเจค</label>
                        <input type="text" class="form-control" id="ProjectName" disabled >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDetail">รายละเอียด</label>
                        <input type="text" class="form-control" id="Detail" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Customer">ลูกค้า</label>
                        <input type="text" class="form-control" id="Customer"disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputDetail">งบประมาณ</label>
                        <input type="int" class="form-control" id="cost"disabled>
                    </div>
                    <div>ความสำคัญ </div>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"disabled>
                            <label class="form-check-label" for="inlineRadio1">สูง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"disabled>
                            <label class="form-check-label" for="inlineRadio2">ปานกลาง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"disabled>
                            <label class="form-check-label" for="inlineRadio3">ต่ำ</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>ตั้งแต่</label>
                            <input type="date" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>ถึง</label>
                            <input type="date" class="form-control"disabled> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>สมาชิก</label>
                    <input type="text" class="form-control" disabled>
                </div>

            </form>
            <a class="btn btn-success" href="../page/PMproject.php">ย้อนกลับ</a>
        </div>
    </div>


    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>