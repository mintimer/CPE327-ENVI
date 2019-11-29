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
    <link href="./css/history.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>View</title>
    <?php
    require 'connect.php';
    session_start();
    $_SESSION['ref'] = str_replace("/envi/CPE327-ENVI", ".", $_SERVER['REQUEST_URI']);
    $sql = "SELECT * FROM campaigninfo WHERE status = 1 ORDER BY start_time";
    $sqlcount = "SELECT COUNT(*) num FROM campaigninfo WHERE status = 1";
    $result = mysqli_query($con, $sqlcount);
    $row = mysqli_fetch_array($result);
    $num = $row['num'];
    $result = mysqli_query($con, $sql);

    
    $sqljoined = "SELECT u.* , c.*
    FROM user_join u LEFT JOIN campaigninfo c ON c.campaign_id = u.campaign_id
    WHERE u.user_id = ".$_SESSION['uid'];

    $sqlnumjoin = "SELECT COUNT(*) num2
    FROM user_join u LEFT JOIN campaigninfo c ON c.campaign_id = u.campaign_id
    WHERE u.user_id = ".$_SESSION['uid'];

    $join = mysqli_query($con, $sqlnumjoin);
    $num2 = mysqli_fetch_array($join);
    $numjoin = $num2['num2'];

    $join = mysqli_query($con, $sqljoined);
    for($y=0 ; $y < $numjoin; $y++){
        $arr = mysqli_fetch_array($join);
        $row2[$y] = $arr['campaign_id'];
    }

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
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>
    <div class="contain">
        <?php
        if($num != 0){
            for ($x = 0; $x < $num; $x++) {
                $row = mysqli_fetch_array($result);
                echo '<div class="boxview">
                    <img class="pic" id="pic" src="' . $row['campaign_pic'] . '"><br>
                    <span class="text-campaignname" id="camname">' . $row['campaign_name'] . '</span>
                    <div class="campaigndetailtextbox">
                        <div class="nav-left2 ">
                            <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                            <span class="text-campaignsub" id="camdate">Date : ' . $row['start_time'] . '</span>
                            <br>
                            <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                            <span class="text-campaignsub" id="camlocation">Location : ' . $row['location'] . '</span>
                            <br>';
                        $sqlcountpeople = "SELECT COUNT(*) num
                        FROM campaigninfo c LEFT JOIN user_join u ON c.campaign_id = u.campaign_id
                        WHERE u.campaign_id = ".$row['campaign_id'];
                        $count = mysqli_query($con, $sqlcountpeople);
                        $pNo = mysqli_fetch_array($count);
                            echo '<img class="picicon" id="picSize" src="./pic/people.png"></img>
                            <span class="text-campaignsub" id="camsize">Size : '.$pNo['num'].'/' . $row['amount_people'] . '</span><br>
                        </div>
                    </div>
                    <div class="campaigndetailbutton">
                        <form action="./ViewDetail.php" method="post" id="select-form">
                            <button type="submit" name="cid" form="select-form" value="' . $row['campaign_id'] . '" class="btn2">Read More</button>
                        </form>
                        ';
                    $check = 0;
                    if($pNo['num'] == $row['amount_people']){
                        $check = 2;
                    }
                    for($z=0;$z<$numjoin;$z++){
                        if($row2[$z] == $row['campaign_id']){
                            $check = 1;
                        }
                    }
                    if($check == 0){
                        echo '<form method="post" id="่join-form">
                                <button type="submit" name="cid" formaction="./joinconfirm.php" value="' . $row['campaign_id'] . '" class="btn2">Join us</button>
                            </form>';
                    }else if($check == 2){
                        echo'<button type="submit" name="cid" class="btncannotclick" disabled>Full</button>';
                    }
                    else echo'<button type="submit" name="cid" class="btncannotclick" disabled>Joined</button>';
                        echo '
                    </div>
                </div>';
            }
        }else echo '<div class="subbox">
        <p class="textnosub" id="camname">There is no campaign right now.</p>
        <a href="./create.php"><button class="btn3" id="joinedbtn">Be the first campaign</button></a>
    </div>';
        ?>
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