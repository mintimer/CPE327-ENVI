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

    <div class="contain">

        <div class="profiledetail">
            <span class="textdetailhead">
                Rate campaign
            </span><br>
            <span class="textdetailsub">
                Choose your attended campaign
            </span>
        </div>

        <div class="ratebox">
            <div class="rate-left">
                <div class="campaignpic">
                    <img id="campaignpic" src="./pic/camp1.png">
                </div>  
            </div>
            
            <div class="rate-right">
                <span class = textdetailcampaign>Sweep for Dad</span><br>
                <span class="ratetextred">You have not rate this campaign yet!</span><br><br>
                <span class = ratetext>Date</span><br><br>
                <span class = ratetext>Place</span><br>
                <a href="./ratecampaign.php"><button class=ratebutt>Rate!!!</button></a>
            </div>
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