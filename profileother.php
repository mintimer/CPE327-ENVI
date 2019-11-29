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
    <?php
        require 'connect.php';
        session_start();
        if($_SESSION['uid']==1) 
            $ref =  './adminviewdetail.php';
        else $ref = $_SESSION['ref'];
        if(isset($_POST['cid']))
            $value=$_POST['cid'];
        else $value = NULL;
        $sql = "SELECT * FROM userinfo WHERE user_id = ".$_POST['visit'];
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_array($result);

        $sql = "SELECT COUNT(*) num FROM campaigninfo WHERE user_id = ".$user['user_id']." AND status = 1" ;
        $result = mysqli_query($con, $sql);
        $countcreate = mysqli_fetch_array($result);

        $sql = "SELECT COUNT(*) num FROM user_join WHERE user_id = ".$user['user_id'];
        $result = mysqli_query($con, $sql);
        $countjoin = mysqli_fetch_array($result);
    ?>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a href="./view.php"><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>
    <div class="contain">
        <div class="profiledetail">
            <img id="profilepic" src="<?php 
                if($user['picture_path']==NULL) 
                    echo "./pic/profile/profilepic.png";
                else echo $user['picture_path']; ?>">
            <br>
            <span class="textdetailhead">
                <?php
                echo $user['firstname'] . ' ' . $user['lastname'];
                ?>
            </span>
            <br><br>
            <span class="textdetailsub">Created campaign :</span>
            <span class="textdetaildata"><?php echo $countcreate['num'] ?></span>
            <br>
            <span class="textdetailsub">Participated campaign :</span>
            <span class="textdetaildata"><?php echo $countjoin['num'] ?></span>
            <br>
            <span class="textdetailsub">Goodness points :</span>
            <span class="textdetaildate"><?php echo $user['goodness_point'] ?></span>
        </div>

        <div class="extradetail">
            <form action="<?php echo $ref; ?>" method="post">
                <button type="submit" class="btn2" value=<?php echo $value; ?> >Back</button>
            </form>

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

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>