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
    include 'connection.php';
?>

    <main class="my-5 pt-4 px-lg-4">
      <div class="container-fluid">
        <h2 class="mb-4">Permanently Delete Report</h2>
        <div class="card">
          <h5 class="card-header">ALL Reports Data</h5>

          <div class="card-body table-responsive">
            <table class="table m-0 table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">CNIC</th>
                  <th scope="col">Edit Operation</th>
                </tr>
              </thead>
              <tbody>
                <?php							
                    $query = "select * from `reports` ORDER BY `id` DESC";
                    $data = mysqli_query($link, $query);
                    $records = mysqli_num_rows($data);     
                    if($records > 0){	
                        while($result = mysqli_fetch_assoc($data)){ 
                            echo "<tr>
                                    <td>".$result['id']."</td>
                                    <td>".$result['fname']."</td>
                                    <td>".$result['lname']."</td>
                                    <td>".$result['email']."</td>
                                    <td>".$result['phone']."</td>
                                    <td>".$result['cnic']."</td>
                                    <td class='text-center'><a class='btn btn-danger' href='confirmDel.php?id=$result[id]'> <i class='fa-solid fa-trash-can fa-sm me-1'></i> Delete</a></td>
                                </tr>";
                        }
                    } else{
                        echo "No Records Found";	
                    }                                           
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>

    <!-- JS Files -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js "></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
