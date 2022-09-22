<?php
    include 'connection.php';
    $showAlert = false;

	// $id = $_POST['id'];
    // echo $id;
	$id = (int)$_GET['id'];
    // echo $id;
	$query  = "SELECT * FROM reports WHERE id = $id";
	$data = mysqli_query($link, $query) or die("Query unsuccessful");

	if(!mysqli_num_rows($data))
	{
		die('Record not found!');
	}

	$result = mysqli_fetch_object($data);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $cnic = $_POST['cnic'];
        $dob = $_POST['dob'];
        $nationality = $_POST['nationality'];
        $passport = $_POST['passport'];
        $result = $_POST['result'];
        $comments = $_POST['comments'];
        $checked = $_POST['checked'];
	
		$sql = "UPDATE reports SET fname ='$fname', lname ='$lname', email ='$email', phone ='$phone', gender ='$gender', 
        cnic ='$cnic', dob ='$dob', nationality ='$nationality', passport ='$passport', result ='$result', comments ='$comments', checked ='$checked'
        Where id ='$id' ";
        
		$data = mysqli_query($link, $sql);

		echo mysqli_error($link);
		
		if($data)
		{
			$showAlert = true;
		}
			
			else
			{
				echo "Record not Update"; 
			}
	}
	
	else
	{
		echo "";
	}	          

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report</title>
    <!-- Font Awesome 6.2.0 -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-6.2.0/css/all.min.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
    include 'header.php';
?>

    <!--- Main Body --->
    <main class="my-5 pt-3 px-lg-4">
      <div class="container-fluid">
     
          
          <section>
              <?php
              if($showAlert){
                  echo '<div class="alert alert-success" role="alert">
                      <b>Successfully</b> Report updated
                    </div>
                    '; } ?>
                    <h2 class="mb-5">Update Report</h2>
        <form action="" method="POST" class="row g-3">
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input
              type="text"
              class="form-control"
              name="fname"
              value="<?php echo @$result->fname; ?>"
            />
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input
              type="text"
              class="form-control"
              name="lname"
              value="<?php echo @$result->lname; ?>"
            />
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              name="email"
              value="<?php echo @$result->email; ?>"
            />
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input
              type="number"
              class="form-control"
              name="phone"
              value="<?php echo @$result->phone; ?>"
            />
          </div>
          <div class="col-md-4">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-select">
              <option selected><?php echo @$result->gender; ?></option>
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
              value="<?php echo @$result->cnic; ?>"
            />
          </div>
          <div class="col-md-4">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input
              type="date"
              class="form-control"
              name="dob"
              value="<?php echo @$result->dob; ?>"
            />
          </div>
          <div class="col-md-6">
            <label for="nationality" class="form-label">Nationality</label>
            <select name="nationality" class="form-select">
              <option selected><?php echo @$result->nationality; ?></option>
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
              value="<?php echo @$result->passport; ?>"
            />
          </div>

          <div class="col-12">
            <label for="Result" class="form-label">Test / Result</label>
            <input
              type="text"
              class="form-control"
              name="result"
              value="<?php echo @$result->result; ?>"
            />
          </div>
          <div class="col-12">
            <label for="Comments" class="form-label">Clinical Comments</label>
            <textarea
              type="text"
              class="form-control"
              name="comments"
              value="<?php echo @$result->comments; ?>"
              rows="3"
            ></textarea>

          </div>
          <div class="col-12">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                name="checked"
                value="<?php echo @$result->checked; ?>"
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
              class="btn btn-warning"
            >
              Update Report
            </button>
          </div>
        </form>
        <section>
    </main>
<!-- JS Files -->
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js "></script>
<script src="./assets/js/custom.js"></script>
</body>
</html>