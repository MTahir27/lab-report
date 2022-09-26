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
         if($login){
            echo'<div class="alert alert-success" role="alert">
      <b>Successfully</b> Logged In
    </div>
    '; } if ($showError) { echo'
    <div class="alert alert-danger" role="alert">
      <b>Error</b> Wrong Username or Password.
    </div>
    '; } ?>
    <div class="signin-content">
      <div class="signin-image">
        <figure>
          <img src="./assets/images/signup.jpg" alt="sing in image" />
        </figure>
        <a href="signUp.php" class="signup-image-link">Create an account</a>
      </div>

      <div class="signin-form">
        <h2 class="form-title">Login</h2>
        <form method="POST" class="register-form" id="login-form">
          <div class="form-group">
            <label for="name"> <i class="fa-solid fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Your Name" />
          </div>
          <div class="form-group">
            <label for="password"><i class="fa-solid fa-lock"></i></label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
            />
          </div>

          <div class="form-group form-button">
            <input
              type="submit"
              name="submit"
              id="signin"
              class="form-submit"
              value="Log in"
            />
          </div>
        </form>
      </div>
    </div>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js "></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
