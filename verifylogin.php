<?php
    require 'connect.php';
    session_start();
    $eOrU = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if(strpos($eOrU,'@') !== false)
        $eOrU_table = 'email';
    else $eOrU_table = 'username';
    $sql = "SELECT * FROM userinfo WHERE $eOrU_table = '$eOrU' and password = '$password' ";
    $result = mysqli_query($con,$sql)
            or die("Failed to query database ".mysql_error());
    $row = mysqli_fetch_array($result);
    if($row[$eOrU_table] == $eOrU && $row['password'] == $password){
        $user = mysqli_query($con,"SELECT * FROM userinfo WHERE $eOrU_table = '$eOrU'");
        $userdata = mysqli_fetch_array($user);
        $_SESSION['uid'] = $userdata['user_id'];
        $_SESSION['user_firstname'] = $userdata['firstname'];
        $_SESSION['user_lastname'] = $userdata['lastname'];
        $_SESSION['role'] = 'user';
        if($_SESSION['uid']==1)
            header("Location: profileadmin.php");
        else header("Location: profile.php");
    }else{
        echo "
        <script>
            document.getElementById('ermsg').innerHTML = 'Invalid username, email or password.';
        </script>
        ";
    }
    mysqli_close($con);
?>