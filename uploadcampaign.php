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
header("Location:view.php");
?>