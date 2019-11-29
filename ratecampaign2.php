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

    <style>
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 5px solid #01bf92;
            border-radius: 25px;
            font-size: 16px;
            resize: none;
        }
    </style>
    <?php
        session_start();
        if(isset($_POST['rate'])){
            $_SESSION['camp']['ratescore'] = $_POST['rate'];
        }
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
            <a href="./home.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>


    <div class="boxrate">
        <div class="nav-left">
            <div class="campaignpicinrate">
                <img id="campaignpicinrate" src="<?php echo $_SESSION['camp']['campaign_pic']; ?>">
            </div>
        </div>
        <div class="nav-right-rate">
            <span class="ratetexttitle">Giving comment for :</span><br>
            <span class="ratetexthead"><?php echo $_SESSION['camp']['campaign_name']; ?></span><br>
        </div>
    </div>

    <div class="boxrate2">
        <form action="./ratesuccess.php" class="ratetextarea" id="comment" method="post">
            <textarea name="comment" placeholder="Your comment"></textarea><br>
        </form>
    </div>
    <div class="boxrate3">
        <button type="submit" form="comment" class="btn5">Submit</button>
        <br>
        <a href="./ratecampaign.php"><button class="btn6">Back</button></a>
    </div>


    <div class="boxdown">
        <div class="nav-left ">
            <span class="text-head ">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
    </div>
</body>

</html>