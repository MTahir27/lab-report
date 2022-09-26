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
    include 'header.php';
?>

    <!--- Main Body --->
    <main class="my-5 pt-5 px-lg-4">
      <div class="container-fluid">
        <?php
            if($showAlert){
                echo '<div class="alert alert-success" role="alert">
        <b>Successfully</b> Report added
      </div>
      '; } ?>
      <section>
        <h2 class="mb-4">Add New Report</h2>
        <form action="addReport.php" method="POST" class="row g-3">
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" required />
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" required />
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required />
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label" >Phone Number</label>
            <input
              type="number"
              class="form-control"
              name="phone"
              minlength="11" maxlength="11"
              required
            />
          </div>
          <div class="col-md-4">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-select" required>
              <option selected>Choose...</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="cnic" class="form-label">CNIC</label>
            <input
              type="number"
              class="form-control"
              name="cnic"
               minlength="16" 
               maxlength="16"
              required
            />
          </div>
          <div class="col-md-4">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" name="dob" required />
          </div>
          <div class="col-md-6">
            <label for="nationality" class="form-label">Nationality</label>
            <select name="nationality" class="form-select" required>
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
            <input
              type="number"
              class="form-control"
              name="passport"
              required
            />
          </div>

          <div class="col-12">
            <label for="Result" class="form-label">Test / Result</label>
            <input type="text" class="form-control" name="result" required />
          </div>
          <div class="col-12">
            <label for="Comments" class="form-label">Clinical Comments</label>
            <textarea
              type="text"
              class="form-control"
              name="comments"
              rows="3"
              required
            ></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                name="checked"
                id="gridCheck"
                value=""
              />
              <label class="form-check-label" for="gridCheck">
                Confirmed
              </label>
            </div>
          </div>
          <div class="col-12">
            <button
              type="submit"
              value="submit"
              name="submit"
              class="btn btn-primary"
            >
              Submit
            </button>
          </div>
        </form>
      </section>
      <?php ?>
    </main>
    <!-- JS Files -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js "></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
