<?php
require 'connect.php';
session_start();
$sql = "INSERT INTO `campaigninfo`(`campaign_name`, `campaign_type`, `start_time`, `end_time`,
                                    `campaign_describe`, `manage_name`, `campaign_pic`, `amount_people`, 
                                    `location`, `user_id`, `lati`, `longti`)
VALUES ('".$_SESSION['campaign_name']."',".$_SESSION['campaign_type'].",'".$_SESSION['start_time']."','".$_SESSION['end_time']."',
        '".$_SESSION['campaign_describe']."','".$_SESSION['manage_name']."','".$_SESSION['campaign_pic']."',".$_SESSION['amount_people'].",
        '".$_SESSION['location']."','".$_SESSION['cmp_user_id']."','".$_SESSION['lati']."','".$_SESSION['longti']."');";
mysqli_query($con,$sql);

$sql = "SELECT campaign_id FROM campaigninfo WHERE campaign_name = '".$_SESSION['campaign_name']."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$cid = $row['campaign_id'];

$sql = "INSERT INTO user_join (user_id, campaign_id ) VALUES ('".$_SESSION['cmp_user_id']."','".$cid."') ";
mysqli_query($con,$sql);

header("Location:history.php");
?>