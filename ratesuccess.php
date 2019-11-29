<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/profile1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/rate.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/ratecampaign.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Rate Success</title>
    <?php
    session_start();
    require 'connect.php';
    $sql = "UPDATE user_join SET rating_score = " . $_SESSION['camp']['ratescore'] . ", comment = '" . $_POST['comment'] . "
        ' WHERE user_id = " . $_SESSION['camp']['user_id'] . " AND campaign_id = " . $_SESSION['camp']['campaign_id'];
    mysqli_query($con, $sql);
    unset($_SESSION['camp']);
    ?>
</head>



<body>
    <div class="box">
        <div class="nav-left">
            <a href="view.php"><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text"><a href="./view.php">Search campaign</a></span>
            <span id="text"><a href="./create.php">Create campaign</a></span>
            <span id="text"><a href="./profile.php">My profile</a></span>
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>

    <div class="contain7">
        <br>
        <br>
        <span class="textjoin" id="join">Rate </span>
        <span class="textcom" id="complete">Completed ! </span>
        <br>

        <span class="textenj" id="enjoy">Thanks for your kind suggestions.</span>
        <br><br><br><br>
        <a href="./history.php"><button class="btn1">Back to history</button></a>
    </div>


    <!-- <div class="profiledetail">

            <div class="ssleft">
                <span class="successheader">Rate</span>
            </div>
            <div class="ssmid">
                <span class="successbody">your paticipated</span><br>
                <span class="successbody2">for better next</span><br><br><br>
                <a href="./history.php"><button class="backbutt">Go back</button></a>
            </div>
            <div class="ssright">
                <span class="successheader">Campaign</span>
            </div>



        </div> -->



    <div class="boxdown ">
        <div class="nav-left ">
            <span class="text-head ">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
</body>

</html>