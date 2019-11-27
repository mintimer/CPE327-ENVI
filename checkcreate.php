<?php
    session_start();
    require 'connect.php';
    $_SESSION['ext'] = 0;
    echo $_FILES['promotepicture']['name'] ;

?>