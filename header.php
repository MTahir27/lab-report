<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Report</title>
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
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--- NavBar --->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <!--- OffCanvas Trigger --->
        <button
          class="navbar-toggler me-2"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasExample"
          aria-controls="offcanvasExample"
        >
          <span
            class="navbar-toggler-icon"
            data-bs-target="#navbarSupportedContent"
          >
          </span>
        </button>
        <!--- OffCanvas Trigger --->
        <a class="navbar-brand fw-bold me-auto" href="index.php"
          >Lab Report Project</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex ms-auto">
            <div class="input-group my-3 my-lg-0">
              <input
                type="text"
                class="form-control"
                placeholder="Recipient's username"
                aria-label="Recipient's username"
                aria-describedby="button-addon2"
              />
              <button class="btn btn-primary" type="button" id="button-addon2">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="true"
              >
                <i class="bi bi-person-circle"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
              >
                <li>
                  <a class="dropdown-item" href="#">
                    Hi
                    <?php echo $_SESSION['username'] ?>
                  </a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--- NavBar --->

    <!-- - Off Canvas --->
    <div
      class="offcanvas offcanvas-start bg-dark text-white sidebar-nav"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-body pt-4 p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold px-3">CORE</div>
            </li>
            <li>
              <a href="index.php" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-speedometer2"></i> </span>
                <span> DashBoard </span>
              </a>
            </li>
            <li class="my-4">
              <hr class="dropdown-divider" />
            </li>

            <li>
              <div class="text-muted small fw-bold px-3">REPORTS</div>
            </li>
            <li>
              <a href="addReport.php" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-plus-square"></i> </span>
                <span> Add Report </span>
              </a>
            </li>
            <li>
              <a href="allReports.php" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-check2-square"></i> </span>
                <span> All Reports </span>
              </a>
            </li>
            <li>
              <a href="editReport.php" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-pencil-square"></i> </span>
                <span> Edit Report </span>
              </a>
            </li>
            <li>
              <a href="deleteReport.php" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-x-square"></i> </span>
                <span> Delete Report </span>
              </a>
            </li>
            <li class="my-4">
              <hr class="dropdown-divider" />
            </li>

            <li>
              <div class="text-muted small fw-bold px-3">SETTING</div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-app-indicator"></i> </span>
                <span> Change Logo </span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-slash-square"></i> </span>
                <span> Change Signature </span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"> <i class="bi bi-geo-alt"></i> </span>
                <span> Change Address </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!--- Off Canvas --->

    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
