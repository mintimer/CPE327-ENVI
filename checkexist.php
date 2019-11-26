<?php
    session_start();
    require 'connect.php';
    $_SESSION['ext'] = 0;
    $sql = "SELECT username, email FROM userinfo";
    $sqlcount = "SELECT COUNT(*) num FROM userinfo";
    $result=mysqli_query($con,$sqlcount);
    $row=mysqli_fetch_array($result);
    $num = $row['num'];
    $result=mysqli_query($con,$sql);
    for($x = 0;$x<=$num;$x++){
        $row=mysqli_fetch_array($result);
        if($row['username']==$_POST['username'])
            $_SESSION['ext'] = 1;
        if($row['email']==$_POST['email'])
            $_SESSION['ext'] = $_SESSION['ext'] + 2;
    }
    if($_SESSION['ext']>0)
        echo "<script> window.location.replace('signup.php'); </script>";
    else{ 
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['phone_no'] = $_POST['phone_no'];
        $_SESSION['dob'] = $_POST['dob'];
        $_SESSION['picpath'] = $_FILES["profilepic"]["name"];

        if($_FILES["profilepic"]["name"] != NULL && (
        strpos($_FILES["profilepic"]["name"],".jpg") !== false ||
        strpos($_FILES["profilepic"]["name"],".png") !== false ||
        strpos($_FILES["profilepic"]["name"],".jpeg") !== false ||
        strpos($_FILES["profilepic"]["name"],".gif") !== false)){
            $target_dir = "pic/profile/";
            if(strpos($_FILES["profilepic"]["name"],".jpg") !== false)
                $target_file = $target_dir . basename($_POST['username'].".jpg");
            if(strpos($_FILES["profilepic"]["name"],".png") !== false)
                $target_file = $target_dir . basename($_POST['username'].".png");
            if(strpos($_FILES["profilepic"]["name"],".jpeg") !== false)
                $target_file = $target_dir . basename($_POST['username'].".jpeg");
            if(strpos($_FILES["profilepic"]["name"],".gif") !== false)
                $target_file = $target_dir . basename($_POST['username'].".gif");
            $_SESSION['picpath'] =  $target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["profilepic"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                $_SESSION['ext'] = 20;
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["profilepic"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    $_SESSION['ext'] = 20;
                }
            }
        }
        else if($_FILES["profilepic"]["name"] == NULL);
        else $_SESSION['ext'] = 20;
        
        if($_SESSION['ext']>0)
            echo "<script> window.location.replace('signup.php'); </script>";
        else echo "<script> window.location.replace('uploadsignup.php'); </script>";
    }
?>