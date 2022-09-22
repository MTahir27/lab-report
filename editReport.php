<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report | Edit Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>

<?php
    include 'header.php';
    include 'connection.php';
?>

<main class="my-5 pt-5 px-lg-4">
    <div class="container-fluid">
       <h2 class="mb-4">Edit Reports</h2>
        <div class="card">
        <h5 class="card-header">ALL Reports Data</h5>
            <div class="card-body table-responsive">
                <table class="table m-0 table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name </th>
                            <th scope="col">Last Name </th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">CNIC</th>
                            <th scope="col">Operation</th>
                            
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
                                    <td>".$result['cnic']."</td>
                                    <td><a class='btn btn-primary' href='updateReport.php?id=$result[id]'> Edit Report</a></td>
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
</main>            


</body>
</html>