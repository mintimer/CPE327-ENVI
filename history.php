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

        <!-- for loop start -->
        <div class="boxview" style="padding-bottom:1%;">
            <img class="pic" id="pic" src="./pic/cam1.jpg"><br>
            <span class="text-campaignname" id="camname">Campaign Name</span>
            <div class="campaigndetailtextbox">
                <div class="nav-left2 ">
                    <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                    <span class="text-campaignsub" id="camdate">Date</span>
                    <br>
                    <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                    <span class="text-campaignsub" id="camlocation">Location</span>
                    <br>
                    <img class="picicon" id="picSize" src="./pic/people.png"></img>
                    <span class="text-campaignsub" id="camsize">Size</span><br>
                </div>
            </div>
            <a href="#"><button class="btn5">Delete Campaign</button></a>
        </div>
        <!-- for loop end -->


    </div>

    <!-- ##################### JOIN BOX #################################################3 -->

    <div class="contain" id="joinbox" style="display: none;">
        <div class="headbox">
            <a><button class="btn7" id="createdbtn" onclick="showcreate()">Created campaign</button></a>
            <a><button class="btn6" id="joinedbtn" onclick="showjoin()">Joined campaign</button></a>
        </div>

        <!-- for loop start -->
        <div class="boxview" style="padding-bottom:1%;">
            <img class="pic" id="pic" src="./pic/cam1.jpg"><br>
            <span class="text-campaignname" id="camname">Campaign Name</span>
            <div class="campaigndetailtextbox">
                <div class="nav-left2 ">
                    <img class="picicon" id="picDate" src="./pic/calendar.png"></img>
                    <span class="text-campaignsub" id="camdate">Date</span>
                    <br>
                    <img class="picicon" id="picLocation" src="./pic/location.png"></img>
                    <span class="text-campaignsub" id="camlocation">Location</span>
                    <br>
                    <img class="picicon" id="picSize" src="./pic/people.png"></img>
                    <span class="text-campaignsub" id="camsize">Size</span><br>
                </div>
            </div>
            <a href="#"><button class="btn4">Rate Campaign</button></a>
        </div>
        <!-- for loop end -->


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