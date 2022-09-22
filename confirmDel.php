<?php
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE FROM reports WHERE id ='$id'";
$data = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Report</title>
    <!-- Font Awesome 6.2.0 -->
    <link
      rel="stylesheet"
      href="./assets/fonts/fontawesome-6.2.0/css/all.min.css"
    />
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <?php
        if($data){
            echo "<div class='vh-100 d-flex flex-column align-items-center justify-content-center'>
                <p>Report Deleted Successfully</p>
                <a href='deleteReport.php' class='btn btn-primary'>Go back</a>
            </div>";
        }else{
            echo"Something went to wrong..!";
        }
    ?>
    <!-- JS Files -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js "></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
