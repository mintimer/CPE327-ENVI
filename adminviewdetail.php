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
            <span class="text-campaigndetailhead" id="Name">Plant with your Dady GOGOGOGOGO</span>
            <br>
            <div class="campaigndetailtextbox">
                <div class="nav-left2">
                    <span class="text2" id="camstatus">Status : </span>
                    <span class="text2" id="camstatus2">Enable</span>
                    <br>
                    <span class="text2" id="camstatus">Create by : </span>
                    <span class="text2"><a href="./profileother.php">Name with link</a></span>
                    <br>
                    <span class="text2" id="camPhone">Category : </span>
                    <span class="text2" id="camstatus2">Detail</span>
                    <br><br>
                    <img class="pic2" id="picDate" src="./pic/calendar.png"></img>
                    <span class="text2" id="camdate">Start date : </span>
                    <span class="text2" id="camstatus2">Detail</span>
                    <br>
                    <img class="pic2" id="picDate" src="./pic/calendar.png"></img>
                    <span class="text2" id="camdate">End date : </span>
                    <span class="text2" id="camstatus2">Detail</span>
                    <br>
                    <img class="pic2" id="picSize" src="./pic/people.png"></img>
                    <span class="text2" id="camsize">Size : </span>
                    <span class="text2" id="camstatus2">Detail</span>
                    <br>
                    <img class="pic2" id="picCompany" src="./pic/company.png"></img>
                    <span class="text2" id="camCompany">Location</span>
                    <span class="text2" id="camstatus2">Detail</span>
                </div>
                <div class="locationcontrol">
                    <span><img class="picMap" id="picMap" src="./pic/map.png"></img></span>
                </div>
            </div>
        </div>
        <div class="boxview2">
            <span class="text-campaigndetailhead" id="Detail">Detail</span>
            <br>
            <div class="campaigndetailtextbox">
                <div class="nav-left3">
                    <span class="text2" id="camstatus">detaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaail</span>
                </div>
            </div>
            <span class="text-campaigndetailhead" id="Detail">Picture</span>
            <br>
            <div class="campaigndetailtextbox">
                <div class="picpreviewcontrol">
                        <span><img class="pic3" id="pic3" src="./pic/cam1.jpg"></img></span>
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