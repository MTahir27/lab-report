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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>

<?php
    include 'connection.php';
    include 'header.php';
?>
 

    <!--- Main Body --->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-3"> DashBoard</div>
            </div>
            <div class="row mt-2 pt-3">
                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3">
                        <h5 class="card-header">Add Report</h5>
                        <div class="card-body">
                          <h5 class="card-title">Add Report Operation</h5>
                          <p class="card-text"> Add a new report in the system.</p>
                          <a href="addReport.php" class="btn btn-light">Add Report</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-warning mb-3">
                        <h5 class="card-header">View All Reports</h5>
                        <div class="card-body">
                          <h5 class="card-title">All Reports List</h5>
                          <p class="card-text">Check all reports list in this system.</p>
                          <a href="allReports.php" class="btn btn-light">Edit Reports</a>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row mt-2 pt-3">
                <div class="col-md-6">
                    <div class="card text-white bg-success mb-3">
                        <h5 class="card-header">Edit Report</h5>
                        <div class="card-body">
                          <h5 class="card-title">Edit Report Operation</h5>
                          <p class="card-text"> Edit report that already add in this system.</p>
                          <a href="editReport.php" class="btn btn-light">Edit Reports</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-danger mb-3">
                        <h5 class="card-header">Delete Report</h5>
                        <div class="card-body">
                          <h5 class="card-title">Delete Report Operation</h5>
                          <p class="card-text">Delete the reports form this system.</p>
                          <a href="deleteReport.php" class="btn btn-light">Delete Reports</a>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fw-bold">
                          Recent Added Records
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name </th>
                                        <th scope="col">Last Name </th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">CNIC</th>
                                        <!-- <th scope="col">Date of Birth</th>
                                        <th scope="col">Nationality</th>
                                        <th scope="col">Passport Number</th>
                                        <th scope="col">Test / Result</th>
                                        <th scope="col">Clinical Comments</th>
                                        <th scope="col">Confirmed </th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
											
                                    $query = "select * from `reports` ORDER BY `id` DESC";
                                    $data = mysqli_query($link, $query);
                                    $records = mysqli_num_rows($data);
                    
                                    if($records > 0)
                                        {	
                                            while($result = mysqli_fetch_assoc($data))
                                                { 
                                                    echo "<tr>
                                                            <td>".$result['id']."</td>
                                                            <td>".$result['fname']."</td>
                                                            <td>".$result['lname']."</td>
                                                            <td>".$result['email']."</td>
                                                            <td>".$result['phone']."</td>
                                                            <td>".$result['gender']."</td>
                                                            <td>".$result['cnic']."</td>
                                                        </tr>";
                                                }
                                        }
                                            
                                    else
                                        {
                                            echo "No Records Found";	
                                        }
                                                        
                                ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </main>

    <!--- Main Body --->
   




    
    
    <!-- <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>