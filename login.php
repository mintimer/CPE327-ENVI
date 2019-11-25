<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login.css" type="text/css">
    <title>Login</title>
    <?php include('connect.php'); ?>
</head>

<body>
    <div class="box">
        <a href="./home.php"><img style="width: 170px" src="./pic/icon.png"></a>
    </div>
    <div class="container">
        <div class="bg-image"></div>
        <div class="form-box">
            <div class="head">
                Welcome
                <span class="text-head">Back</span>
                <p class="text-p">Log in to create and join campaign.</p>
            </div>
            <form action="#" id="login-form" method="post">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Email addredd or username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <input type="submit" value=" LOGIN " class="btn">
                <p class="text-p">Don't have an account? <a href="./signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
    <div class="boxdown">
        <div class="nav-left">
            <span class="text-head">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
    </div>
    <?php
        if(isset($_POST['email']) && isset($_POST['password']))
            require 'verifylogin.php';
    ?>
</body>

</html>