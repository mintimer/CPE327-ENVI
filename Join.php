<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/join.css">
    <link rel="stylesheet" href="./css/view1.css">
    <?php
    session_start();
    require 'connect.php';
    $sql = "INSERT INTO user_join (user_id, campaign_id) VALUES (".$_SESSION['uid'].", ".$_SESSION['cid']." )";
    mysqli_query($con,$sql);
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
        <span class="textjoin" id="join">Joining</span> &nbsp;
        <span class="textcom" id="complete">Completed ! </span>
        <br>
        <br>
        <br>
        <img class="piccor" id="picCorrect" src="./pic/com.png"></img>
        <br>
        <br>
        <br>
        <span class="textenj" id="enjoy">Enjoy your trip</span>
        <br>
        <span class="textenj" id="good">Goodluck </span>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <a href="./View.php"><spam id="back">Back to View page</span></a>
    </div>


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