<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Pannel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/js/main.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const table = document.querySelector('.dashboard__table-content table');
      const rows = Array.from(table.querySelectorAll('tbody tr'));

      const sortButton = document.getElementById('sortByIdButton');
      sortButton.addEventListener('click', () => {
        rows.sort((a, b) => {
          const idA = parseInt(a.querySelector('td:first-child').textContent);
          const idB = parseInt(b.querySelector('td:first-child').textContent);
          return idB - idA;
        });

        rows.forEach(row => {
          table.querySelector('tbody').appendChild(row);
        });
      });
    });
  </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo1.png" alt="">
        <span class="d-none d-lg-block">Dashboard - Admin </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
        
        <li class="nav-item dropdown pe-3">


          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <a href="./index.html" class="btn btn-danger me-2"><i class="fa fa-sign-out"></i> Logout</a>
          </a><!-- End Profile Iamge Icon -->
        
        </li><!-- End Profile Nav -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
    </ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard__table">
                <div class="dashboard-heading">
                    <h3 class="dashboard-title">Products List</h3>
                    <div class="dashboard__add-button">
                        <a href="add_product.php" class="btn btn-primary">Add Product</a>
                        <button id="sortByIdButton" class="btn btn-secondary">Sort by ID</button>
                        <br><br>
                    </div>
                </div>
                <div class="dashboard__table-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'db.php'; 
                            
                            $query = "SELECT id_p, name_p, price_p FROM products";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['id_p'] . '</td>';
                                    echo '<td>' . $row['name_p'] . '</td>';
                                    echo '<td>$' . $row['price_p'] . '</td>';
                                    echo '<td>';
                                    echo '<a href="update_product.php?id=' . $row['id_p'] . '" class="btn btn-primary">Update</a>';
                                    echo '<a href="delete_product.php?id=' . $row['id_p'] . '" class="btn btn-danger">Delete</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="4">No products found</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard__export-buttons">
    <a href="export_pdf.php" class="btn btn-success" download>Export to PDF</a>
    <a href="export_excel.php" class="btn btn-success" download>Export to Excel</a>
</div>
</section>

<hr>

<section>
    <?php
    require_once __DIR__ . '/../config/db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['ban'])) {
            $username = $_POST['ban'];
            $banQuery = "UPDATE client SET banned = 1 WHERE username_c = ?";
            $stmt = $conn->prepare($banQuery);
            $stmt->bind_param("s", $username);
            $stmt->execute();
        } elseif (isset($_POST['unban'])) {
            $username = $_POST['unban'];
            $unbanQuery = "UPDATE client SET banned = 0 WHERE username_c = ?";
            $stmt = $conn->prepare($unbanQuery);
            $stmt->bind_param("s", $username);
            $stmt->execute();
        }
    }

    //records from the client table
    $query = "SELECT username_c, pass_c, banned FROM client";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo '<table style="border-collapse: collapse; width: 100%; border: 1px solid #ddd; margin-top: 20px;">';
        echo '<tr style="background-color: #f2f2f2;"><th style="padding: 8px; text-align: left;">Username</th><th style="padding: 8px; text-align: left;">Password</th><th style="padding: 8px; text-align: left;">Status</th><th style="padding: 8px; text-align: left;">Actions</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td style="padding: 8px; text-align: left;">' . $row['username_c'] . '</td>';
            echo '<td style="padding: 8px; text-align: left;">' . $row['pass_c'] . '</td>';
            echo '<td style="padding: 8px; text-align: left;">' . ($row['banned'] ? 'Banned' : 'Active') . '</td>';
            echo '<td style="padding: 8px; text-align: left;">';
            if ($row['banned']) {
                echo '<form action="" method="POST"><button type="submit" name="unban" value="' . $row['username_c'] . '">Unban</button></form>';
            } else {
                echo '<form action="" method="POST"><button type="submit" name="ban" value="' . $row['username_c'] . '">Ban</button></form>';
            }
            echo '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No records found.';
    }
    $conn->close();
    ?>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>