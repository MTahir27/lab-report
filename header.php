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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="./assets/fonts/fontawesome-6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
      <div
        class="container-fluid d-flex align-item-center justify-content-center"
      >
        <button
          class="me-2 d-lg-none bg-transparent border-0"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="sidebar"
        >
          <span
            class="navbar-toggler-icon"
            data-bs-target="#navbarSupportedContent"
          >
          </span>
        </button>

        <a class="navbar-brand fw-bold mx-auto ms-lg-0" href="index.php"
          >Lab Report Project</a
        >
        <ul class="navbar-nav mb-0">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="true"
            >
              <i class="fa-regular fa-circle-user fa-xl text-white"></i>
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
    </nav>
    <!--- NavBar --->

    <!-- Sidebar -->
    <div
      class="offcanvas offcanvas-start bg-dark text-white sidebar-nav"
      tabindex="-1"
      id="sidebar"
      aria-labelledby="sidebarLabel"
    >
      <div class="offcanvas-body pt-4 p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold px-3">CORE</div>
            </li>
            <li>
              <a href="index.php" class="nav-link px-3 active">
                <i class="fa-solid fa-gauge me-2 fa-lg"></i>
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
              <a href="allReports.php" class="nav-link px-3 active">
                <i class="fa-regular fa-square-check me-2 fa-lg"></i>
                <span> All Reports </span>
              </a>
            </li>
            <li>
              <a href="addReport.php" class="nav-link px-3 active">
                <i class="fa-regular fa-square-plus me-2 fa-lg"></i>
                <span> Add Report </span>
              </a>
            </li>
            <li>
              <a href="editReport.php" class="nav-link px-3 active">
                <i class="fa-regular fa-pen-to-square me-2 fa-lg"></i>
                <span> Edit Report </span>
              </a>
            </li>
            <li>
              <a href="deleteReport.php" class="nav-link px-3 active">
                <i class="fa-regular fa-rectangle-xmark me-2 fa-lg"></i>
                <span> Delete Report </span>
              </a>
            </li>
            <!-- <li class="my-4">
              <hr class="dropdown-divider" />
            </li> -->

            <!-- <li>
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
            </li> -->
          </ul>
        </nav>
      </div>
    </div>
    <!--- Sidebar End --->

    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
