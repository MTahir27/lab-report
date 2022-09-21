<?php
    // include 'header.php';
    include 'connection.php';
    $showAlert = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $cnic = $_POST["cnic"];
        $dob = $_POST["dob"];
        $nationality = $_POST["nationality"];
        $passport = $_POST["passport"];
        $result = $_POST["result"];
        $comments = $_POST["comments"];
        $checked = $_POST["checked"];

        $sql = "INSERT INTO reports (fname, lname, email, phone, gender, cnic, dob, nationality, passport, result, comments, checked)
                VALUES ('$fname', '$lname', '$email', '$phone', '$gender', '$cnic', '$dob', '$nationality', '$passport', '$result', '$comments', '$checked')";

        if (mysqli_query($link, $sql)) 
        {
            $showAlert = true;
        }

        else
        {
            echo "Something went to wrong...";
        }
                
    }

    mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report | Add Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
<body>

<?php
    include 'header.php';
?>

<!--- Main Body --->
<main class="mt-5 pt-2">
        <div class="container-fluid">
            <div class="row">
            <?php
            if($showAlert){
                echo '<div class="alert alert-success my-2" role="alert">
                <b>Successfully</b> Report added
            </div>';
            }   
            ?>
                <div class="col-md-12 fw-bold fs-3 "> Add New Report </div>
                <div class="from p-5">
                    <form action="addReport.php" method="POST" class="row g-3">
                    <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="text" class="form-control" name="cnic">
                        </div>
                        <div class="col-md-4">
                            <label for="dob" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob">
                        </div>
                        <div class="col-md-6">
                            <label for="nationality" class="form-label">Nationality</label>
                            <select name="nationality" class="form-select">
                            <option selected>Choose...</option>
                            <option>Pakistani</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>Canada</option>
                            <option>Swden</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="Passport" class="form-label">Passport Number</label>
                            <input type="text" class="form-control" name="passport">
                        </div>
                        
                        <div class="col-12">
                            <label for="Result" class="form-label">Test / Result</label>
                            <input type="text" class="form-control" name="result" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="Comments" class="form-label">Clinical Comments</label>
                            <input type="text" class="form-control" name="comments" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checked">
                            <label class="form-check-label" for="gridCheck">
                                Confirmed
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                </div>
            </div>

            <?php 

            

            ?>

        </div>
    </main>

    <!--- Main Body --->







<!-- <script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>     -->

</body>
</html>