<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./css/create1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Create campaign</title>
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
    <div class="contain">
        <div class="form-box">
            <div class="head">
                <p class="texthead">Let's get start</p>
                <p class="textsub">Choose your category</p>
            </div>
            <form action="./create2.php" id="create-form" method="post">
                <div class="form-group">
                    <span class="text">Planting</span>
                    <input type="radio" name="category" id="category" class="form-control" value=1 required>
                </div>
                <div class="form-group">
                    <span class="text">Public cleaning</span>
                    <input type="radio" name="category" id="category" class="form-control" value=2 required>
                </div>
                <div class="form-group">
                    <span class="text">Volunteer</span>
                    <input type="radio" name="category" id="category" class="form-control" value=3 required>
                </div>
                <div class="form-group">
                    <span class="text">Others</span>
                    <input type="radio" name="category" id="category"class="form-control" value=4 required>
                </div>
                <!-- <input type="submit" value="Submit" class="btn"> -->
            </form>
            <button onclick="goBack()" class="btn2">Back</button>
            <button class="btn3" type="submit" form="create-form" >Next</button>
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