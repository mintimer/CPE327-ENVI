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
    <title>Rate Campaign</title>
    <?php
    session_start();
    require 'connect.php';
    if(isset($_POST['cid']))
        $_SESSION['cid'] = $_POST['cid'];
    $sql = "SELECT * FROM campaigninfo c INNER JOIN user_join u ON c.campaign_id = u.campaign_id WHERE c.campaign_id = ".$_SESSION['cid']." AND u.user_id = ".$_SESSION['uid'];
    $result = mysqli_query($con,$sql);
    $camp = mysqli_fetch_array($result);
    $_SESSION['camp'] = $camp;
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
            <a href="./profile.php"><button class="btnnobtn2">
                <img id="miniprofilepic" src=" <?php echo $_SESSION['picpath']; ?>"> 
                <span id="text">My Profile</span>
            </button></a>
            <a href="./home.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>


    <div class="contain3" style="padding-top:110px; padding-bottom:50px;">

        <div class="boxrate">
            <div class="nav-left">
                <div class="campaignpicinrate">
                    <img id="campaignpicinrate" src="<?php echo $_SESSION['camp']['campaign_pic']; ?>">
                </div>
            </div>
            <div class="nav-right-rate">
                <span class="ratetexttitle">Giving a rate for :</span><br>
                <span class="ratetexthead"><?php echo $_SESSION['camp']['campaign_name']; ?></span><br>

            </div>
        </div>

        <div class="boxrate">
            <form action="./ratecampaign2.php" method="post">
                <button type="submit" name="rate" value=1 class="nav1">1 Star</button>
                <button type="submit" name="rate" value=2 class="nav2">2 Star</button>
                <button type="submit" name="rate" value=3 class="nav3">3 Star</button>
                <button type="submit" name="rate" value=4 class="nav4">4 Star</button>
                <button type="submit" name="rate" value=5 class="nav5">5 Star</button>
            </form>
        </div>
        <div class="boxrate5">
        <a href="./history.php"><button class="btn6">Back</button></a>
        </div>

    </div>

    <div class="boxdown ">
        <div class="nav-left ">
            <span class="text-head ">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
</body>

</html>