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
                            <th scope="col" class="text-center">Action</th>
                            
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
                                    <td class='text-center'><a class='btn btn-secondary' href='updateReport.php?id=$result[id]'> <i class='fa-regular fa-pen-to-square fa-sm me-1'></i> Edit </a></td>
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