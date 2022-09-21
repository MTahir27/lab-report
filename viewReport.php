<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report | Update Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    // include 'header.php';
    include 'connection.php';

	// $id = $_GET['id'];
    // echo $pid;
	$id =  (int)mysqli_real_escape_string($link,$_GET['id']);
    // echo $id;
	$query  = "SELECT * FROM reports WHERE id = {$id} ";
	$data = mysqli_query($link, $query) or die("Query unsuccessful");

	if(!mysqli_num_rows($data))
	{
		die('Record not found!');
	}

	$result = mysqli_fetch_object($data);

?>
 

    <!--- Main Body --->

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-3">
            <img heigth="200px" width="300px" src="images/newlogo.jpg" class="img-fluid float-center" alt="logo">
        </div>
        <div class="col-md-8 mt-4">
            <h2 align="center"> Medical Diagnostic Center Faisalabad </h2>
            <h5 align="center"> EMail: info@Medicaldiagnosticcenter.com  </h5>
            <h5 align="center"> Phone: +92 041 8004032, +92 333 1234567 </h5>
        </div>
        <hr class="divider"> 
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4 align="center" class="mt-2"> <u> Patient Information </u> </h4>
            <h6 align="rigth" class="form-label"> Date : 
            <?php    
                $mydate=getdate(date("U"));
                echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            ?>
            </h6>
            <h6 align="rigth" class="form-label"> Time : 
            <?php    
                $mydate=getdate(date("U"));
                echo "$mydate[hours]:$mydate[minutes]:$mydate[seconds]";
            ?>
            </h6>
        </div>
    </div>

    <div class="row">   
        <div class="col-md-4 mt-5">
            <h6 class="form-label"> Patient Name : <?php echo @$result->fname." ".@$result->lname; ?> </h6> 
            <h6 class="form-label"> CNIC :  <?php echo @$result->cnic; ?></h6>
            <h6 class="form-label"> Nationality : <?php echo @$result->nationality; ?></h6>
            
        </div>
        <div class="col-md-4 mt-5">
            <h6 class="form-label"> Gender : <?php echo @$result->gender; ?></h6>
            <h6 class="form-label"> Date Of Birth : <?php echo @$result->dob; ?></h6>
            <h6 class="form-label"> Phone No : <?php echo @$result->phone; ?></h6>
            
        </div>
        <div class="col-md-4 mt-2">
            <img heigth="150px" width="150px" src="images/qr.png" class="rounded float-end img-thumbnail mb-2" alt="QR Code">

        </div>
        <hr class="divider"> 
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <h4 align="center" class="mt-2"> <u> Chemical Examination </u> </h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Test Name</th>
                        <th scope="col">Result </th>
                        <th scope="col">Clinical Comments </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo @$result->fname; ?> </td>
                        <td> <?php echo @$result->result; ?> </td>
                        <td> <?php echo @$result->comments; ?> </td>
                    </tr>
                </tbody>    
            </table>
        </div>

    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="footer">
            <hr class="divider"> </hr>
            <p> 
                <b> Address: </b> x Block,Y Rode Z ares Faisalabad, Pakistan 
                <b> Phone No: </b> +92 041 8004032, +92 333 1234567
                <b> EMail: </b> info@Medicaldiagnosticcenter.com 
            </p>
            <hr class="divider"> </hr>
        </div>
    </div>   
</div>         
 




<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    

</body>
</html>