<?php
    include 'connection.php';

    $login = false;
    $showError = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST["name"];
        $password = $_POST["password"];
        // echo $name;
        // echo $password;
       
        $sql = "SELECT * FROM users WHERE name ='$name' AND password = '$password' ";
        $result = mysqli_query($link, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $name;
            header("location: index.php");
        }
        else{
            $showError = true;
        }
    }
    

    mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Lab Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Icon -->
    <link rel="stylesheet" href="formStyling/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="formStyling/css/style.css">
</head>
<body>

    <div class="container mt-3">
    <?php
         if($login){
            echo'<div class="alert alert-success" role="alert">
            <b>Successfully</b> Logged In
             </div>';
        }
        if ($showError) {
            echo'<div class="alert alert-danger" role="alert">
            <b>Error</b> Wrong Username or Password.
            </div>';
        }
        
    ?>
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="formStyling/images/signin-image.jpg" alt="sing in image"></figure>
                <a href="signUp.php" class="signup-image-link">Create an account</a>
        </div>

        <div class="signin-form">
            <h2 class="form-title">Login </h2>
            <form method="POST" class="register-form" id="login-form">
                <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="name" id="name" placeholder="Your Name"/>
                </div>
                <div class="form-group">
                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                </div>
                <div class="form-group form-button">
                     <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                </div>
            </form>
            <div class="social-login">
                <span class="social-label">Or login with</span>
                <ul class="socials">
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
           

    <!-- JS -->
    <script src="formStyling/vendor/jquery/jquery.min.js"></script>
    <script src="formStyling/js/main.js"></script>
</body>
</html>