<?php
    require 'connect.php';
    session_start();
    if($_POST['delete']==1){
        $sql = "DELETE FROM `campaigninfo` WHERE campaign_id = ".$_SESSION['cid'];
        mysqli_query($con,$sql);
        header("Location:./history.php");
    } else {
        header("Location:./viewparticipant.php");
    }
?>