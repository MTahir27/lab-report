<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


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
    include 'connection.php';
    include 'header.php';
?>

    <!--- Main Body --->
    <main class="my-5 pt-4">
      <div class="container-fluid">
        <h2 class="mb-4">DashBoard</h2>
        <section class="row g-3 mb-5">
          <div class="col-md-6">
            <div class="card text-white bg-warning">
              <h5 class="card-header">View All Reports</h5>
              <div class="card-body">
                <h5 class="card-title">All Reports List</h5>
                <p class="card-text">Check all reports list in this system.</p>
                <a href="./pages/record/allReports.php" class="btn btn-light"
                  >All Reports</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card text-white bg-primary">
              <h5 class="card-header">Add Report</h5>
              <div class="card-body">
                <h5 class="card-title">Add Report Operation</h5>
                <p class="card-text">Add a new report in the system.</p>
                <a href="addReport.php" class="btn btn-light">Add Report</a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card text-white bg-success">
              <h5 class="card-header">Edit Report</h5>
              <div class="card-body">
                <h5 class="card-title">Edit Report Operation</h5>
                <p class="card-text">
                  Edit report that already add in this system.
                </p>
                <a href="editReport.php" class="btn btn-light">Edit Report</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card text-white bg-danger">
              <h5 class="card-header">Delete Report</h5>
              <div class="card-body">
                <h5 class="card-title">Delete Report Operation</h5>
                <p class="card-text">Delete the reports form this system.</p>
                <a href="deleteReport.php" class="btn btn-light"
                  >Delete Report</a
                >
              </div>
            </div>
          </div>
        </section>

        <!-- <section>
          <div class="card">
            <h5 class="card-header">Recent Added Records</h5>
            <div class="card-body table-responsive">
              <table class="table m-0 table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">CNIC</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                                              
                                      $query = "select * from `reports` ORDER BY `id` DESC";
                                      $data = mysqli_query($link, $query);
                                      $records = mysqli_num_rows($data);
                      
                                      if($records >
                  0) { while($result = mysqli_fetch_assoc($data)) { echo "
                  <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['fname']."</td>
                    <td>".$result['lname']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['cnic']."</td>
                  </tr>
                  "; } } else { echo "No Records Found"; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section> -->
      </div>
    </main>
    <!-- JS Files -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js "></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
