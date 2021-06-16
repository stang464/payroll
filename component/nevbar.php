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
    <nav class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
        <div class="navbar-brand">
            <a href=""><img src="../asset/logo.png" alt="" width="50px"></a>
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-dark" href="index.php">ChuanChom Entertainment</a>
        </div>

        <ul class="mr-5 mt-1 px-3 ">
            <div>
                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="avatar">
                <div class="dropdown">
                    <p class="dropbtn">ลุง</p>
                    <div class="dropdown-content">
                        <a href="login.php">logout</a>
            
                    </div>
                </div>
            </div>


            </div>
        </ul>
    </nav>

</body>
<script src="../css/js/bootstrap.js"></script>
<script src="../css/js/popper.js"></script>
<script src="../css/js/slim.js"></script>

</html>

<style>
    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    nav {
        background-color: white;
    }

    .dropbtn {
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
  

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
   
</style>