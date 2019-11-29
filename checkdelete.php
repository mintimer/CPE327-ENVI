
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
    <title>Confirm Delete</title>
    <?php
    session_start();
    $ref = $_SESSION['ref'];
    if(isset($_POST['cid'])){
        $value = $_POST['cid'];
        $_SESSION['cid'] = $_POST['cid'];
    }
    ?>
</head>

<body>
    <div class="box">
        <div class="nav-left">
            <a href="./view.php"><img style="width: 135px" src="./pic/icon.png"></a>
        </div>
        <div class="nav-right">
            <span id="text"><a href="./view.php">Search campaign</a></span>
            <span id="text"><a href="./create.php">Create campaign</a></span>
            <a href="./profile.php"><button class="btnnobtn2">
                <img id="miniprofilepic" src=" <?php echo $_SESSION['picpath']; ?>"> 
                <span id="text">My Profile</span>
            </button></a>
            <a href="./signout.php"><button class="btn1">Sign out</button></a>
        </div>
    </div>

    <div class="contain3">
        <span class="textdelete" id="join">Delete</span> &nbsp;
        <span class="textjoin" id="complete">Campaign </span>
        <br>
        <span class="textenj" id="select">Warning! This action cannot be undone.</span>
    </div>


    <div class="contain3">
    <form action="./deletecamp.php" method="post">
    <button type="submit" class="btn5" name="delete" value="1">I confirm to delete this campaign</button><br>
    <button type="submit" class="btn3" name="delete" value="0">Cancel</button>
    </form>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>


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