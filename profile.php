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
    <title>Profile</title>
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
    <div class="contain">
        <div class="profiledetail">
            <img id="profilepic" src="
            <?php
                session_start();
                if($_SESSION['picpath']==NULL)
                    echo "./pic/profile/profilepic.png";
                else echo $_SESSION['picpath'];
            ?>
            ">
            <br>
            <span class="textdetailhead">
                <?php
                    echo $_SESSION['firstname'].' '.$_SESSION['lastname'];
                ?>
            </span>
            <br><br>
            <span class="textdetailsub">Created campaign :</span>
            <span class="textdetaildata">0</span>
            <br>
            <span class="textdetailsub">Participated campaign :</span>
            <span class="textdetaildata">0</span>
            <br>
            <span class="textdetailsub">Goodness points :</span>
            <span class="textdetaildate">
            <?php
                echo $_SESSION['goodness_point'];
            ?></span>
        </div>

        <div class="extradetail">
            <a href="./create.php"><button class="btn2">Create Campaign</button></a>
            <a href="./view.php"><button class="btn2">Search Campaign</button></a>
            <a href="#"><button class="btn2">My History</button></a>
            <a href="./rate.php"><button class="btn2">Rate Campaign</button></a>
        </div>
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