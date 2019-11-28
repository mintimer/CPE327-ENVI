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
    <?php
        require 'connect.php';
        $sql = "SELECT * FROM campaigninfo WHERE status = 1 ORDER BY start_time";
        $sqlcount = "SELECT COUNT(*) num FROM campaigninfo WHERE status = 1";
        $result = mysqli_query($con, $sqlcount);
        $row = mysqli_fetch_array($result);
        $num = $row['num'];
        $result = mysqli_query($con, $sql);
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

    <div class="contain">
    <?php
        for($x=0;$x<$num;$x++){
            $row = mysqli_fetch_array($result);
            echo '<div class="boxview">
                <img class="pic" id="pic" src="'.$row['campaign_pic'].'"><br>
                <span class="text-campaignname" id="camname">'.$row['campaign_name'].'</span>
                <div class="campaigndetailtextbox">
                    <div class="nav-left2 ">
                        <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                        <span class="text-campaignsub" id="camdate">Date : '.$row['start_time'].'</span>
                        <br>
                        <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                        <span class="text-campaignsub" id="camlocation">Location : '.$row['location'].'</span>
                        <br>
                        <img class="picicon" id="picSize" src="./pic/people.png"></img>
                        <span class="text-campaignsub" id="camsize">Size : '.$row['amount_people'].'</span><br>
                    </div>
                </div>
                <div class="campaigndetailbutton">
                    <button type="submit" name="uid" form="select-form" value="'.$row['campaign_id'].'" class="btn2">Read More</button></a>

                </div>
            </div>';
        }
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