<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/history.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/create1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Participant</title>
    <?php
    require 'connect.php';
    session_start();
    $_SESSION['ref'] = str_replace("/envi/CPE327-ENVI", ".", $_SERVER['REQUEST_URI']);
    if(isset($_POST['cid'])){
        $_SESSION['cid'] = $_POST['cid'];
    }
    $sql = "SELECT *
    FROM user_join uf INNER JOIN campaigninfo c ON c.campaign_id = uf.campaign_id INNER JOIN userinfo u ON uf.user_id = u.user_id
    WHERE uf.campaign_id = ".$_SESSION['cid'];
    $sqlcount = "SELECT COUNT(*) num
    FROM user_join uf INNER JOIN campaigninfo c ON c.campaign_id = uf.campaign_id INNER JOIN userinfo u ON uf.user_id = u.user_id
    WHERE uf.campaign_id = ".$_SESSION['cid'];
    $result = mysqli_query($con,$sqlcount);
    $row = mysqli_fetch_array($result);
    $num = $row['num'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
        <div class="form-box">
            <div class="head">
                <p class="texthead"><?php echo $row['campaign_name'] ?></p>
                <p class="texhistorysub">Status : <?php
                                                    if ($row['status'] == 1)
                                                    echo '<span class="text2" style="color:#01906e" id="camstatus2">Enable</span>';
                                                else if ($row['status'] == 0)
                                                    echo '<span class="text2" style="color:orangered" id="camstatus2">Pending admin checking</span>';
                                                else if ($row['status'] == 2)
                                                    echo '<span class="text2" style="color:red" id="camstatus2">Suspended</span>';
                                                    ?></p>
                <p class="texhistorysub">Participant : <?php
                    echo $num.' / ' . $row['amount_people'];
                ?></p>
                <p class="texhistorysub"><a href="./history.php"><button class="btn6" >Go Back</button></a></p>
                <br>
            </div>

            <div class="box1">
                <form action="./profileother.php" id="visit" method="post"></form>
                <?php
                for($x=0;$x<$num;$x++){
                    echo '
                <p class="textdetailsub">
                    <button class="btnnobtn" type="submit" form="visit" name="visit" value="'.$row['user_id'].'">
                        <img id="miniprofilepic" src="';
                            if($row['picture_path']==NULL) 
                                echo "./pic/profile/profilepic.png";
                            else echo $t=$row['picture_path']; 
                    echo '">  '.$row['firstname'] . ' ' . $row['lastname'].'</button>';
                    $row = mysqli_fetch_array($result);
                    echo'</p><br><br>';
                }
               
                ?>
                <br>
                <a class="middle" href="./checkdelete.php"><button class="btn5" id="joinedbtn" >Delete campaign</button></a>
            </div>
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
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>