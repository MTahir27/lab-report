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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Report</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="./assets/fonts/fontawesome-6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/css/formStyle.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
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
                        <label for="name"><i class="fa-solid fa-user"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa-solid fa-envelope"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fa-solid fa-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="repassword"><i class="fa-solid fa-lock"></i></label>
                        <input type="password" name="repassword" id="repassword" placeholder="Repeat your password" required>
                    </div>
                   
                    <div class="form-group form-button">
                        <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="./assets/images/signup.jpg" alt="sing up image"></figure>
                <a href="login.php" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js "></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>