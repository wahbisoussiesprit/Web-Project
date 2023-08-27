<?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price'])) {
        $id_p = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        // Update the product details in the database
        $stmt = $conn->prepare("UPDATE products SET name_p = ?, price_p = ? WHERE id_p = ?");
        $stmt->bind_param("sdi", $name, $price, $id_p);

        if ($stmt->execute()) {
            // Product updated successfully, redirect to product list
            header("Location: dashboard.php");
            exit();
        } else {
            // Error occurred while updating product
            echo "Error updating product: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Fetch existing product details for pre-filling the form
if (isset($_GET['id'])) {
    $id_p = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE id_p = ?");
    $stmt->bind_param("i", $id_p);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $product = $result->fetch_assoc();
    } else {
        echo 'Product not found.';
        exit();
    }

    $stmt->close();
} else {
    echo 'Invalid request.';
    exit();
}

$conn->close();
?>

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



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Product</h1>

    </div><!-- Update product -->

    <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <form action="update_product.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $product['id_p']; ?>">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="<?php echo $product['name_p']; ?>" required><br><br>

                        <label for="price">Price in Dollars:</label>
                        <input type="number" name="price" step="0.01" value="<?php echo $product['price_p']; ?>"
                            required><br><br>

                        <button type="submit">Update Product</button>
                    </form>
                </div>
            </div>
        </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
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