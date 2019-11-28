<?php
require 'connect.php';
session_start();
$sql = "INSERT INTO `userinfo`(`username`, `password`, `firstname`, `lastname`, `phone_no`, `email`, `dob`, `picture_path` , `goodness_point`) 
        VALUES ('".$_SESSION['username']."', '".$_SESSION['password']."', '".$_SESSION['firstname']."', '".$_SESSION['lastname']."'
        , '".$_SESSION['phone_no']."', '".$_SESSION['email']."', '".$_SESSION['dob']."', '".$_SESSION['picpath']."', 100)";
mysqli_query($con,$sql);
$sql = "SELECT * FROM userinfo WHERE username = '".$_SESSION['username']."'";
$result = mysqli_query($con,$sql);
$row = $row=mysqli_fetch_array($result);
$_SESSION['uid'] = $row['uid'];
$_SESSION['goodness_point'] = $row['goodness_point'];
$_SESSION['banned'] = $row['banned'];
header("Location:verifylogin.php");
?>