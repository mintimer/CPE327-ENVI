<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/view1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/join.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <?php
    session_start();
    $_SESSION['cid'] = $_POST['cid'];
    ?>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a href="./view.php"><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text"><a href="./view.php">Search campaign</a></span>
            <span id="text"><a href="./create.php">Create campaign</a></span>
            <span id="text"><a href="./profile.php">My profile</a></span>
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>

    <div class="contain3">
        <span class="textjoin" id="join">Join</span> &nbsp;
        <span class="textcom" id="complete">Compaign </span>
        <span class="textjoin" id="complete">Now !</span>
        <br>
        <span class="textenj" id="select">Select your account</span>
    </div>


    <div class="contain3">
        <a href="./join.php"><button class="btn4" onclick="goBack()">Confirm to use this account</button></a>
        <br>
        <span class="textor" id="select">or</span>
        <br>
        <button class="btn5" onclick="goBack()">Cancel</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>


    <div class="boxdown ">
        <div class="nav-left ">
            <span class="text-head ">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
    </div>
</body>

</html>