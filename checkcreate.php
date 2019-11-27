<?php
session_start();
require 'connect.php';
$_SESSION['ext2'] = '0';
$sql = "SELECT campaign_name FROM campaigninfo";
$sqlcount = "SELECT COUNT(*) num FROM campaigninfo";
$result = mysqli_query($con, $sqlcount);
$row = mysqli_fetch_array($result);
$num = $row['num'];
$result = mysqli_query($con, $sql);
for ($x = 0; $x <= $num; $x++) {
    $row = mysqli_fetch_array($result);
    if ($row['campaign_name'] == $_POST['campaignname'])
        $_SESSION['ext2'] = '1';
}
if(isset($_FILES["promotepicture"]["name"])){
    if ($_FILES["promotepicture"]["name"] != NULL && (strpos($_FILES["promotepicture"]["name"], ".jpg") !== false ||
    strpos($_FILES["promotepicture"]["name"], ".png") !== false ||
    strpos($_FILES["promotepicture"]["name"], ".jpeg") !== false ||
    strpos($_FILES["promotepicture"]["name"], ".gif") !== false)) {
        $target_dir = "pic/campaign/";
        if (strpos($_FILES["promotepicture"]["name"], ".jpg") !== false)
            $target_file = $target_dir . basename($_POST['campaignname'] . ".jpg");
        if (strpos($_FILES["promotepicture"]["name"], ".png") !== false)
            $target_file = $target_dir . basename($_POST['campaignname'] . ".png");
        if (strpos($_FILES["promotepicture"]["name"], ".jpeg") !== false)
            $target_file = $target_dir . basename($_POST['campaignname'] . ".jpeg");
        if (strpos($_FILES["promotepicture"]["name"], ".gif") !== false)
            $target_file = $target_dir . basename($_POST['campaignname'] . ".gif");
        $_SESSION['campaign_pic'] =  "./".$target_file;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["promotepicture"]["tmp_name"]);
            if ($check !== false) {
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
        if ($_FILES["promotepicture"]["size"] > 8000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            $_SESSION['ext2'] = $_SESSION['ext2'].'2';
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["promotepicture"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["promotepicture"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
                $_SESSION['ext2'] = $_SESSION['ext2'].'2';
            }
        }
        $_SESSION['campaign_name'] = $_POST['campaignname'];
        $_SESSION['start_time'] = $_POST['startdate'];
        $_SESSION['end_time'] = $_POST['enddate'];
        $_SESSION['campaign_describe'] = $_POST['detail'];
        $_SESSION['manage_name'] = $_POST['manager'];
        $_SESSION['amount_people'] = $_POST['amount'];
        $_SESSION['location'] = $_POST['location'];
        $_SESSION['cmp_user_id'] = $_SESSION['uid'];
        $_SESSION['lati'] = $_POST['latitude'];
        $_SESSION['longti'] = $_POST['longtitude'];
    } else if ($_FILES["promotepicture"]["name"] == NULL);
    else $_SESSION['ext2'] = $_SESSION['ext2'].'2';
}else 
    $_SESSION['ext2'] = $_SESSION['ext2'].'3';
if ($_SESSION['ext2'] != '0')
    echo "<script> window.location.replace('create2.php'); </script>";
else echo "<script> window.location.replace('uploadcampaign.php'); </script>";
?>