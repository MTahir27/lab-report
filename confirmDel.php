<?php
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE FROM reports WHERE id ='$id'";
$data = mysqli_query($link, $query);

if($data)
{
    echo "<font color='green'> Report delete from records... <a href='deleteReport.php'> To check Updated List Click Here... </a>";
}

else
{
    echo"Something went to wrong..!";
}

?>