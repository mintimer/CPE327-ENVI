<?php
    require 'connect.php';
    session_start();
    $sql = "UPDATE `campaigninfo` SET `status`= ".$_POST['status']." WHERE campaign_id = ".$_SESSION['cid'];
    mysqli_query($con,$sql);
    header("Location:adminview.php");
?>