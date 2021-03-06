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
    <title>Detail</title>
    <?php
    require 'connect.php';
    session_start();
    $_SESSION['ref'] = str_replace("/envi/CPE327-ENVI", ".", $_SERVER['REQUEST_URI']);
    if(isset($_POST['cid'])){
        $_SESSION['cid'] = $_POST['cid'];
    }
    $sql = "SELECT * FROM campaigninfo WHERE campaign_id = " . $_SESSION['cid'];
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sqlname = "SELECT * FROM userinfo WHERE user_id = " . $row['user_id'];
    $result2 = mysqli_query($con, $sqlname);
    $user = mysqli_fetch_array($result2);
    ?>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <a href="./profileadmin.php"><button class="btnnobtn2">
                <img id="miniprofilepic" src="<?php echo $_SESSION['picpath']; ?>"> 
                <span id="text">Main Menu</span>
            </button></a>
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
                                                        echo '<span class="text2" style="color:#01906e" id="camstatus2">Enable</span>';
                                                    else if ($row['status'] == 0)
                                                        echo '<span class="text2" style="color:orangered" id="camstatus2">Pending admin checking</span>';
                                                    else if ($row['status'] == 2)
                                                        echo '<span class="text2" style="color:red" id="camstatus2">Suspended</span>';
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
                    <img class="pic2" id="picSize" src="./pic/people.png"></img>
                    <span class="text2" id="camsize">Size : </span>
                    <span class="text2" id="camstatus2"><?php echo $row['amount_people']; ?></span>
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
            <form action="./updatestatus.php" method="post">
            <br>
            </form>
            <a href="./adminviewall.php"><button class="btn3" >Go Back</button></a>
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