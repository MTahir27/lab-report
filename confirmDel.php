<?php
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE FROM reports WHERE id ='$id'";
$data = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report | Delete Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    if($data)
{
    
    echo "
    <div class='vh-100 d-flex flex-column align-items-center justify-content-center'>
        <p>Report Deleted Successfully</p>
        <a href='deleteReport.php' class='btn btn-primary'>Go back</a>
    </div>
    ";
}

else
{
    echo"Something went to wrong..!";
}
?>
</body>
</html>