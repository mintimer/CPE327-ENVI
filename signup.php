<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/login1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Sign Up</title>
    <script>
        // Function to check Whether both passwords 
        // is same or not. 
        window.onload = "";
        var success = [0,0,0,0];
        function checkPassword(form) {
            password1 = form.password.value;
            password2 = form.rpassword.value;
            success[2] = success[0]+success[1];
            // If password not entered 
            if (password1 == '')
                alert("Please enter Password");
            // If confirm password not entered 
            else if (password2 == '')
                alert("Please enter confirm password");
            // If Not same return False.     
            else if (success[2] != 2) {
                alert("\nInvalid input. Please try again.")
                return false;
            }
            // If same return True. 
            else {
                alert("Welcome to ENVI ")
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="box">
        <a href="./home.php"><img style="width: 170px" src="./pic/icon.png"></a>
    </div>
    <div class="container">
        <div class="bg-image"></div>
        <div class="form-box">
            <div class="head">
                Join
                <span class="text-head">ENVI </span>now
                <p class="text-p">Create an account to make the great campaign.</p>
            </div>
            <p class="text-p" style="color:red"><?php
                session_start();
                if(isset($_SESSION['ext'])){
                    if($_SESSION['ext'] == 1)
                        echo "Username already used";
                    else if($_SESSION['ext'] == 2)
                        echo "Email already used";
                    else if($_SESSION['ext'] == 3)
                        echo "Username and email already used";   
                    else if($_SESSION['ext'] == 20)
                        echo "Image file is not support";  
                    else if($_SESSION['ext'] == 21)
                        echo "Username already used and Image file is not support";  
                    else if($_SESSION['ext'] == 22)
                        echo "Email already used and Image file is not support";  
                    else if($_SESSION['ext'] == 23)
                        echo "Username and email already used and Image file is not support";  
                    session_destroy();
                } 
            ?></p>
            <form action="./checkexist.php" enctype="multipart/form-data" id="login-form" onSubmit="return checkPassword(this)" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input onChange="email_check()" type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="Email address" required>
                </div>
                <p style="color:red" id='ermsg_email'></p>
                <script>
                    function email_check(){
                        var em = document.getElementById('email').value;
                        var n = em.includes("@") && em.includes(".");
                        if(!n){
                            document.getElementById('ermsg_email').innerHTML = 'Invalid email.';
                            success[0] = 0;
                        }
                        else {
                            document.getElementById('ermsg_email').innerHTML = '';
                            success[0] = 1;    
                        }
                    }
                </script>
                <div class="form-group">
                    <input onChange="password_check()" type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input onChange="password_check()" type="password" name="rpassword" id="rpassword" class="form-control" placeholder="Confirm password" required>
                </div>
                <p style="color:red" id="ermsg_password"></p>
                <script>
                    function password_check(){
                        var pw = document.getElementById('password').value;
                        var rpw = document.getElementById('rpassword').value;
                        if(pw!=rpw){
                            document.getElementById('ermsg_password').innerHTML = 'Password does not match.';
                            success[1] = 0;
                        }
                        else {
                            document.getElementById('ermsg_password').innerHTML = '';
                            success[1] = 1;
                        }
                    }
                </script>
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" autocomplete="off" placeholder="First name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" class="form-control" autocomplete="off" placeholder="Last name" required>
                </div>
                <div class="form-group">
                    <span class="text">Upload Profile picture (optional)</span>
                    <input type="file" name="profilepic" id="profilepic" class="form-control-file">
                </div>
                <br>
                <input type="submit" name="submit" value=" SIGN UP " id="submit" class="btn">
                <p class="text-p">Already have an account? <a href="./login.php">Login</a></p>
                <br>
                <p class="text-p-2">By clicking on Sign up, you agree to ENVI's Terms and Conditions of Use.<br> To learn more about how ENVI collects, uses, shares and protects your personal data please read ENVI's Privacy Policy. </p>
            </form>
        </div>
    </div>
    <div class="boxdown">
        <div class="nav-left">
            <span class="text-head">ENVI</span>
        </div>
        <div class="nav-right ">
            <span>2018 All Right Reserve</span>
        </div>
    </div>
</body>
</html>