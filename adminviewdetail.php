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
    $sql = "SELECT * FROM campaigninfo WHERE campaign_id = " . $_POST['uid'];
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
            <span id="text"><a href="./profileadmin.php">Main menu</a></span>
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
            <a href="#"><button class="btn4">Approve</button></a>
            <br>
            <a href="#"><button class="btn5">Suspend</button></a>
            <br>
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
</body>


</html>