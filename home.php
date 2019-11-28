<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/home1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Envi</title>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text">Become a member</span>
            <span id="text"><a href="./signup.php">Sign up</a></span>
            <a href="login.php"><button class="btn1">Login</button></a>
        </div>
    </div>
    <div class="contain">
        <div class="homedetail">
            <img src="./pic/boy under tree.png" style="width: 500px;float: right;margin: auto;">
            <br><br><br><br><br>
            <div id="textmain" style="display: block;" >
                <span class="text1">Let's create the</span>
                <span class="text2">campaign</span>
                <br>
                <span class="text2">that make</span>
                <span class="text3">our world better</span><br><br>
            </div>
            <div id="textjoin" style="display : none">
                <span class="text1">State join the</span>
                <span class="text2">campaign</span>
                <br>
                <span class="text2">that you</span>
                <span class="text3">interested</span><br><br>
            </div>
            <div id="textrate" style="display: none;">
                <span class="text1">Rate the</span>
                <span class="text2">campaign</span>
                <br>
                <span class="text2">to make </span>
                <span class="text3">better one</span><br><br>
            </div>
            <div id="textview" style="display: none;">
                <span class="text1">Find interesting</span>
                <span class="text2">campaign</span>
                <br>
                <span class="text2">in many</span>
                <span class="text3">category</span><br><br>
            </div>
            <a href="signup.php"><button class="btn2">Get Start Now</button></a>
            <div class="extradetail">
                <img class="picdetail" id="piccreate" src="./pic/home-create.png" onmouseover="showcreate()">
                <img class="picdetail" id="picjoin" src="./pic/home-join.png" onmouseover="showjoin()">
                <img class="picdetail" id="picrate" src="./pic/home-rate.png" onmouseover="showrate()">
                <img class="picdetail" id="picview" src="./pic/home-view.png" onmouseover="showview()">

            </div>
        </div>
    </div>
    <div class="boxdown">
        <div class="nav-left">
            <span class="text-head">ENVI</span>
        </div>
        <div class="nav-right">
            <span>2018 All Right Reserve</span>
        </div>
    </div>

    <script type="text/javascript">
        function showcreate(){
            document.getElementById("textjoin").style.display = "none";
            document.getElementById("textmain").style.display = "block";
            document.getElementById("textrate").style.display = "none";
            document.getElementById("textview").style.display = "none";
        }
        function showjoin(){
            document.getElementById("textjoin").style.display = "block";
            document.getElementById("textmain").style.display = "none";
            document.getElementById("textrate").style.display = "none";
            document.getElementById("textview").style.display = "none";
        }
        function showrate(){
            document.getElementById("textrate").style.display = "block";
            document.getElementById("textmain").style.display = "none";
            document.getElementById("textjoin").style.display = "none";
            document.getElementById("textview").style.display = "none";
        }
        function showview(){
            document.getElementById("textview").style.display = "block";
            document.getElementById("textmain").style.display = "none";
            document.getElementById("textrate").style.display = "none";
            document.getElementById("textjoin").style.display = "none";
        }
        </script>
</body>

</html>