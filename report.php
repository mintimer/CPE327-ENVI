<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/create.css">
    <title>Create campaign</title>
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
        <div class="form-box">
            <div class="head">
                <p class="texthead">Report trouble</p><br>
            </div>
            <form action="#" id="create-form">
                <div class="form-group">
                    <span class="text">User</span>
                    <input type="radio" name="campaign category" class="form-control" required>
                </div>
                <div class="form-group">
                    <span class="text">Campaign</span>
                    <input type="radio" name="campaign category" class="form-control" required>
                </div>
                <div class="form-group">
                    <span class="text">Name</span>
                    <input type="textarea" row="10" name="campaignname" class="form-control" autocomplete="off" placeholder="give us the name" required>
                </div>
                <div class="form-group">
                    <span class="text">Detail</span>
                    <input type="text" name="campaignname" class="form-control" autocomplete="off" placeholder="give us the reason" required>
                </div>
                <input type="submit" value="Submit" class="btn">
                <button onclick="goBack()" class="btn2">Back</button>
            </form>


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