<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/view1.css">

</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a href="./home.php"><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text"><a href="./view.php">Search campaign</a></span>
            <span id="text"><a href="./create.php">Create campaign</a></span>
            <span id="text"><a href="./profile.php">My profile</a></span>
            <a href="./home.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>

    <div class="contain">

            <div class="boxview">
            <img class="pic" id="cam1" src="./pic/cam1.jpg">
            <br>
            <div class="nav-left2 ">
                <span class="text1" id="camname">Name</span>
            </div>
            <br>
            <br>
            <div class="nav-left2 ">
                <img class="picicon" id="picRate" src="./pic/star.png"></img>
                <span class="text6" id="camrate">Rate</span>
            </div>
            <br>
            <div class="nav-left2 ">
                <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                <span class="text6" id="camdate">Date</span>
            </div>
            <br>
            <div class="nav-left2">
                <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                <span class="text6" id="camlocation">Location</span>
            </div>
            
            <br>
            <div class="nav-left2">
                <img class="picicon" id="picSize" src="./pic/people.png"></img>
                <span class="text6" id="camsize">Size</span>
            </div>
            
            <br>
            <a href="./ViewDetail.php"><button class="btn2">Read More</button></a>
            <a href="./ViewDetail.php"><button class="btn2">Join us</button></a>
            </div>
            <br>
    </div>

    <br>
    <br>


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