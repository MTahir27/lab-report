<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Report | Print Report</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
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

    <main class="container py-5">
      <section
        class="d-flex flex-column flex-md-row-reverse gap-5 align-items-center justify-content-between flex-wrap"
      >
        <div>
          <img src="images/newlogo.jpg" class="medical-logo" alt="logo" />
        </div>
        <div>
          <h4 class="fw-bold">Medical Diagnostic Center Faisalabad</h4>
          <p class="mb-2">
            <strong>Email:</strong> info@Medicaldiagnosticcenter.com
          </p>
          <p><strong>Phone:</strong> +92 041 8004032 +92 333 1234567</p>
        </div>
      </section>
      <hr />
      <section>
        <div class="d-flex align-items-center justify-content-between">
          <h4 class="text-decoration-underline mb-4">Patient Information</h4>
          <button
            type="button"
            onclick="window.print()"
            class="btn btn-primary printBtn"
          >
            Print Report
          </button>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-md-4">
            <p class="mb-2">
              <strong>Date :</strong>
              <?php    
                    $mydate=getdate(date("U"));
                    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
                ?>
            </p>
            <p class="mb-2">
              <strong>Patient Name :</strong>
              <?php echo @$result->fname." ".@$result->lname; ?>
            </p>
            <p class="mb-2">
              <strong>CNIC :</strong>
              <?php echo @$result->cnic; ?>
            </p>
            <p class="mb-2">
              <strong>Nationality :</strong>
              <?php echo @$result->nationality; ?>
            </p>
          </div>
          <div class="col-sm-6 col-md-4">
            <p class="mb-2">
              <strong> Time :</strong>
              <?php    
                    $mydate=getdate(date("U"));
                    echo "$mydate[hours]:$mydate[minutes]:$mydate[seconds]";
                ?>
            </p>
            <p class="mb-2">
              <strong>Gender :</strong>
              <?php echo @$result->gender; ?>
            </p>
            <p class="mb-2">
              <strong>Date Of Birth :</strong>
              <?php echo @$result->dob; ?>
            </p>
            <p class="mb-2">
              <strong> Phone No :</strong>
              <?php echo @$result->phone; ?>
            </p>
          </div>
          <div class="col-md-4 text-md-end">
            <img
              heigth="150px"
              width="150px"
              src="images/qr.png"
              class="img-fluid border"
              alt="QR Code"
            />
          </div>
        </div>
      </section>
      <hr />

      <section>
        <div class="card">
          <h4 class="card-header">Chemical Examination</h4>
          <div class="card-body table-responsive">
            <table class="table m-0 table-bordered">
              <thead>
                <tr>
                  <th scope="col">Test Name</th>
                  <th scope="col">Result</th>
                  <th scope="col">Clinical Comments</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo @$result->fname; ?></td>
                  <td><?php echo @$result->result; ?></td>
                  <td><?php echo @$result->comments; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>

    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
