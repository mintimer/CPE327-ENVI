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
                <p class="texthead">View Participant</p>
                <p class="texhistorysub">Status : Enable</p>
                <p class="texhistorysub">Participant : 0 / 20</p>
                <p class="texhistorysub"><button class="btn6" onclick="goBack()">Go Back</button></p>
                <br>
            </div>

            <div class="box1">
                <p class="textdetailsub">
                    <!-- loop start -->
                    //Participant Name with link
                    <!-- loop end -->
                </p>
                <br>
                <a class="middle"><button class="btn5" id="joinedbtn" onclick="showjoin()">Delete campaign</button></a>
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