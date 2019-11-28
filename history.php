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
    <?php
    require 'connect.php';
    session_start();
    $sql = "SELECT * FROM campaigninfo WHERE user_id = ".$_SESSION['uid'];
    $sqlcount = "SELECT COUNT(*) num FROM campaigninfo WHERE user_id = ".$_SESSION['uid'];
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

    ?>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text"><a href="./view.php">Search campaign</a></span>
            <span id="text"><a href="./create.php">Create campaign</a></span>
            <span id="text"><a href="./profile.php">My profile</a></span>
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>

    <!-- ##################### CREATE BOX #################################################3 -->

    <div class="contain" id="createbox" style="display: block;">
        <div class="headbox">
            <a><button class="btn6" id="createdbtn" onclick="showcreate()">Created campaign</button></a>
            <a><button class="btn7" id="joinedbtn" onclick="showjoin()">Joined campaign</button></a>
        </div>

        <?php
        for($x=0;$x<$num;$x++){
            $row = mysqli_fetch_array($result);
            echo '<div class="boxview" style="padding-bottom:1%;">
                <img class="pic" id="pic" src="'.$row['campaign_pic'].'"><br>
                <span class="text-campaignname" id="camname">'.$row['campaign_name'].'</span>
                <div class="campaigndetailtextbox">
                    <div class="nav-left2 ">
                        <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                        <span class="text-campaignsub" id="camdate">Date : '.$row['start_time'].'</span>
                        <br>
                        <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                        <span class="text-campaignsub" id="camlocation">Location : '.$row['location'].'</span>
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
                        <form action="./viewparticipant.php" method="post" id="select-form">
                            <button type="submit" name="cid" form="select-form" value="' . $row['campaign_id'] . '" class="btn3">View participant</button>
                        </form>
            </div>';
        }?>


    </div>

    <!-- ##################### JOIN BOX #################################################3 -->

    <div class="contain" id="joinbox" style="display: none;">
        <div class="headbox">
            <a><button class="btn7" id="createdbtn" onclick="showcreate()">Created campaign</button></a>
            <a><button class="btn6" id="joinedbtn" onclick="showjoin()">Joined campaign</button></a>
        </div>

        <?php
        for($y=0;$y<$numjoin;$y++){
            $row2 = mysqli_fetch_array($join);
            echo '<div class="boxview" style="padding-bottom:1%;">
                <img class="pic" id="pic" src="'.$row2['campaign_pic'].'"><br>
                <span class="text-campaignname" id="camname">'.$row2['campaign_name'].'</span>
                <div class="campaigndetailtextbox">
                    <div class="nav-left2 ">
                        <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                        <span class="text-campaignsub" id="camdate">Date : '.$row2['start_time'].'</span>
                        <br>
                        <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                        <span class="text-campaignsub" id="camlocation">Location : '.$row2['location'].'</span>
                        <br>';
                        $sqlcountpeople = "SELECT COUNT(*) num
                        FROM campaigninfo c LEFT JOIN user_join u ON c.campaign_id = u.campaign_id
                        WHERE u.campaign_id = ".$row2['campaign_id'];
                        $count = mysqli_query($con, $sqlcountpeople);
                        $pNo = mysqli_fetch_array($count);
                        echo '<img class="picicon" id="picSize" src="./pic/people.png"></img>
                        <span class="text-campaignsub" id="camsize">Size : '.$pNo['num'].'/' . $row2['amount_people'] . '</span><br>
                    </div>
                </div>
                <a href="#"><button class="btn4">Rate Campaign</button></a>
            </div>';
        }?>

        <span class="textdetailhead" id="camname">You didn't join any campaign.</span>

    </div>

    <div class="boxdown ">
        <div class="nav-left ">
            <span class="text-head ">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
    </div>

    <script type="text/javascript">
        function showcreate() {
            document.getElementById("createbox").style.display = "block";
            document.getElementById("joinbox").style.display = "none";
            document.getElementById("createdbtn").className = "btn6";
            document.getElementById("joinedbtn").className = "btn7";
        }

        function showjoin() {
            document.getElementById("createbox").style.display = "none";
            document.getElementById("joinbox").style.display = "block";
            document.getElementById("createdbtn").className = "btn7";
            document.getElementById("joinedbtn").className = "btn6";
        }
    </script>
</body>

</html>