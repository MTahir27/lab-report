<?php
    include 'connection.php';
    $showAlert = false;

	// $id = $_POST['id'];
    // echo $id;
	$id = (int)$_GET['id'];
    echo $id;
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
    <title>Lab Report | Update Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>
<?php
    include 'header.php';
?>
 
    <!--- Main Body --->
    <main class="mt-3 pt-2">
        <div class="container-fluid">
            <div class="row">
                <?php
                    if($showAlert){
                        echo '<div class="alert alert-success my-2" role="alert">
                        <b>Successfully</b> Report updated
                    </div>';
                    }   
                ?>
                <div class="col-md-12 fw-bold fs-3"> Update Report</div>
            </div>
            <div class="from p-5">
                    <form action="" method="post" class="row g-3">
                    <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fname" value="<?php echo @$result->fname; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="<?php echo @$result->lname; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo @$result->email; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo @$result->phone; ?>">
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
                            <input type="text" class="form-control" name="cnic" value="<?php echo @$result->cnic; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="dob" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" value="<?php echo @$result->dob; ?>">
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
                            <input type="text" class="form-control" name="passport" value="<?php echo @$result->passport; ?>">
                        </div>
                        
                        <div class="col-12">
                            <label for="Result" class="form-label">Test / Result</label>
                            <input type="text" class="form-control" name="result" value="<?php echo @$result->result; ?>">
                        </div>
                        <div class="col-12">
                            <label for="Comments" class="form-label">Clinical Comments</label>
                            <input type="text" class="form-control" name="comments" value="<?php echo @$result->comments; ?>">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checked" value="<?php echo @$result->checked; ?>">
                            <label class="form-check-label" for="gridCheck">
                                Confirmed
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" value="submit" name="submit" class="btn btn-warning"> Update Report </button>
                        </div>
                        </form>
    
	
        </div>         
    </main>





<!-- <script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>     -->

</body>
</html>