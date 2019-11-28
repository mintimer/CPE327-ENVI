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
    <link href="./css/join.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <?php
    require 'connect.php';
    session_start();
    if(isset($_POST['cid'])){
        $_SESSION['cid'] = $_POST['cid'];
    }
    $sql = "SELECT * FROM campaigninfo WHERE campaign_id = " . $_SESSION['cid'];
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sqlname = "SELECT * FROM userinfo WHERE user_id = " . $row['user_id'];
    $result2 = mysqli_query($con, $sqlname);
    $user = mysqli_fetch_array($result2);

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
            <span id="text"><a href="./profile.php">My profile</a></span>
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>


    <div class="contain2">
        <div class="boxview2">
            <span class="text-campaigndetailhead" id="Name"><?php echo $row['campaign_name']; ?></span>
            <br>
            <div class="campaigndetailtextbox">
                <div class="nav-left2">
                    <form action="./profileother.php" id="visit" method="post"></form>
                    <span class="text2" id="camstatus">Status : </span>
                    <span class="text2" id="camstatus2"><?php
                                                        if ($row['status'] == 1)
                                                            echo 'Enable';
                                                        else if ($row['status'] == 0)
                                                            echo 'Pending Admin Checking';
                                                        else if ($row['status'] == 2)
                                                            echo 'Suspended';
                                                        ?></span>
                    <br>
                    <span class="text2" id="camstatus">Create by : </span>

                    <span class="text2">
                        <button class="btnnobtn" type="submit" form="visit" name="visit" value="<?php echo $row['user_id']; ?>">
                        <img id="miniprofilepic" src="
                                    <?php 
                                    if($user['picture_path']==NULL) 
                                        echo "./pic/profile/profilepic.png";
                                    else echo $user['picture_path']; 
                                    ?>
                                    "> 
                                    <?php echo $user['firstname'] . ' ' . $user['lastname']; ?>
                        </button>
                    </span>
                    <br>
                    <span class="text2" id="camstatus">Category : </span>
                    <span class="text2" id="camstatus2"><?php
                                                        if ($row['campaign_type'] == 1)
                                                            echo 'Planting';
                                                        else if ($row['campaign_type'] == 2)
                                                            echo 'Public cleaning';
                                                        else if ($row['campaign_type'] == 3)
                                                            echo 'Volunteer';
                                                        else if ($row['campaign_type'] == 4)
                                                            echo 'Other';
                                                        ?></span>
                    <br><br>
                    <img class="pic2" id="picDate" src="./pic/calendar.png"></img>
                    <span class="text2" id="camdate">Start date : </span>
                    <span class="text2" id="camstatus2"><?php echo $row['start_time']; ?></span>
                    <br>
                    <img class="pic2" id="picDate" src="./pic/calendar.png"></img>
                    <span class="text2" id="camdate">End date : </span>
                    <span class="text2" id="camstatus2"><?php echo $row['end_time']; ?></span>
                    <br>
                    <?php
                    $sqlcountpeople = "SELECT COUNT(*) num
                    FROM campaigninfo c LEFT JOIN user_join u ON c.campaign_id = u.campaign_id
                    WHERE u.campaign_id = ".$row['campaign_id'];
                    $count = mysqli_query($con, $sqlcountpeople);
                    $pNo = mysqli_fetch_array($count);
                    ?>
                    <img class="pic2" id="picSize" src="./pic/people.png"></img>
                    <span class="text2" id="camsize">Size : </span>
                    <span class="text2" id="camstatus2"><?php echo $pNo['num'].'/'.$row['amount_people']; ?></span>
                    <br>
                    <img class="pic2" id="picCompany" src="./pic/company.png"></img>
                    <span class="text2" id="camCompany">Location : </span>
                    <span class="text2" id="camstatus2"><?php echo $row['location']; ?></span>
                </div>
                <div id="map" class="locationcontrol">
                </div>
            </div>
        </div>
        <div class="boxview2">
            <span class="text-campaigndetailhead" id="Detail">Detail</span>
            <br>
            <div class="campaigndetailtextbox">
                <div class="nav-left3">
                    <span class="text2" id="camstatus"><?php echo $row['campaign_describe']; ?></span>
                </div>
            </div>
            <span class="text-campaigndetailhead" id="Detail">Picture</span>
            <br>
            <div class="campaigndetailtextbox">
                <div class="picpreviewcontrol">
                    <span><img id="pic3" src="<?php echo $row['campaign_pic']; ?>"></img></span>
                </div>
            </div>
            <?php
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
                        echo '<form method="post" id="่joining-form">
                        <button type="submit" name="cid" formaction="./joinconfirm.php" value="'.$row['campaign_id'].'" class="btn3">Join us</button>
                        <br>
                        </form>';
            }
            else if($check == 2){
                echo '<button type="submit" name="cid" class="btn3cannotclick" disabled>Full</button>';
            }
            else echo'<button type="submit" name="cid" class="btn3cannotclick" disabled>Joined</button>';
            ?>
            <button class="btn3" onclick="goBack()">Go Back</button>
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
    <script>
        var map, marker, lat, lng, pos;

        function initMap() {
            lat = <?php echo $row['lati']; ?>;
            lng = <?php echo $row['longti']; ?>;
            pos = {
                lat: lat,
                lng: lng
            };
            map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 7,
                    center: pos,
                    streetViewControl: false,
                    fullscreenControl: false,
                    data: false
                });
            marker = new google.maps.Marker({
                position: pos,
                map: map,
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB_iaHIfhLObFmtyTMO1vW0LeYWphhV5U&callback=initMap">
    </script>
</body>


</html>