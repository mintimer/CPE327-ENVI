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
        function checkPassword(form) {
            password1 = form.password.value;
            password2 = form.rpassword.value;

            // If password not entered 
            if (password1 == '')
                alert("Please enter Password");

            // If confirm password not entered 
            else if (password2 == '')
                alert("Please enter confirm password");

            // If Not same return False.     
            else if (password1 != password2) {
                alert("\nPassword did not match. Please try again.")
                return false;
            }

            // If same return True. 
            else {
                alert("Password Match: Welcome to ENVI")
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
            <form action="#" id="login-form" onSubmit="return checkPassword(this)">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Email address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="rpassword" id="rpassword" class="form-control" placeholder="Confirm password" required>
                </div>
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" autocomplete="off" placeholder="First name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" class="form-control" autocomplete="off" placeholder="Last name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone_no" class="form-control" autocomplete="off" placeholder="Phone number" required>
                </div>
                <div class="form-group">
                <span style="position : absolute; margin: auto; padding: 10px; padding-left:120px;" >Date of birth</span>
                    <input type="date" name="dob" class="form-control" autocomplete="off" placeholder="Date of birth" required>
                </div>
                <div class="form-group">
                    <span class="text">Upload Profile picture (optional)</span>
                    <input type="file" name="profilepic" class="form-control-file">
                </div>
                <br>
                <input type="submit" value=" SIGN UP " id="submit" class="btn">
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