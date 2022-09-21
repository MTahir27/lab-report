<?php
    include 'connection.php';

    $showAlert = false;
    $showError = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST["name"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $repassword = $_POST["repassword"];
    //    $exists = false;
       
    //    $sqlExist = "SELECT * FROM `user` WHERE name = '$name'";
    //    $sqlExistResult = mysqli_query($link, $sqlExist);
    //     $num = mysqli_num_rows($sqlExistResult);
    //     if ($num > 0) {
    //         $showError = "Username Already Exists";
    //     }
    //     else{
            if ($password == $repassword) {
                $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
                $result = mysqli_query($link, $sql);
                if ($result) {
                    $showAlert = true;
                }
            }
            else{
             $showError = "Password do not match";
            }

        // }

       
    }

    mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login | Lab Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="formStyling/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="formStyling/css/style.css">
</head>
<body>

    <div class="container mt-3">
        <?php
            if ($showAlert) {
                echo'<div class="alert alert-success" role="alert">
                <b>Successfully</b> Register in Lab Report Project. <a href="login.php"> Login Here</a>
                 </div>';
            }
            if ($showError) {
                echo'<div class="alert alert-success" role="alert">
                <b>Error</b>'. $showError .'
                </div>';
            }
        ?>
        <div class="signup-content">
            <div class="signup-form">
                <p>Creat an Account</p>
                <h2 class="form-title">Sign up </h2>
                <form action="signUp.php" method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name" ></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="repassword"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="repassword" id="repassword" placeholder="Repeat your password" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="formStyling/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="login.php" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="formStyling/vendor/jquery/jquery.min.js"></script>
    <script src="formStyling/js/main.js"></script>
</body>
</html>