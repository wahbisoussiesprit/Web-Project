<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bull-Sup | Admin Section</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__auth">
                                <div class="dropdown">
                                        <i class="fa fa-user"></i> Admin 
                                    </a>

                                    <div class="header__top__right__auth">
                                        <a href="./index.html" class="btn btn-danger"><i class="fa fa-sign-out"></i>   Logout</a>
                                    </div>                                   
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">




                    </nav>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
        </div>
    </section>
    <!-- Hero Section End -->

    <section align="center">
            <!-- Inside the <div class="header__top__right"> element -->
<div class="header__top__left">
    <!-- Other elements here -->

    <!-- Add Product Button -->
    <a href="addfp.php" class="btn btn-success"><i class="fa fa-plus"></i> Add Product</a>
</div>




    </section>

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>The Products</h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">

            <?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

// Fetch all records from the front_products table
$query = "SELECT idf_p, namef_p, pricef_p, image_url FROM front_products";
$result = $conn->query($query);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">';
        echo '<div class="featured__item" data-product-id="' . $row['idf_p'] . '">';
        echo '<div class="featured__item__pic set-bg" data-setbg="' . $row['image_url'] . '">';
        echo '</div>';
        echo '<div class="featured__item__text">';
        echo '<h6><a href="#">' . $row['namef_p'] . '</a></h6>';
        echo '<h5>$' . $row['pricef_p'] . '</h5>';
        echo '<a href="updatefp.php?id=' . $row['idf_p'] . '" class="btn btn-primary">Update Product</a>';
        echo '<a href="deletefp.php?id=' . $row['idf_p'] . '" class="btn btn-danger">Delete Product</a>'; // Add Delete button
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'No records found.';
}

// Close the database connection
$conn->close();
?>

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

   

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Whey Protein</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Creatine Monohydrate</h6>
                                        <span>$20.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C4 Preworkout</h6>
                                        <span>$15.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Whey Protein</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t4.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Testo Boost</h6>
                                        <span>$10.99</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C4 PreWorkout</h6>
                                        <span>$15.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Creatine Monohydrate</h6>
                                        <span>$20.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t4.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Testo Boost</h6>
                                        <span>$10.99</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C4 PreWorkout</h6>
                                        <span>$15.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Creatine Monohydrate</h6>
                                        <span>$20.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C4 PreWorkout</h6>
                                        <span>$15.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Whey Protein</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Creatine Monohydrate</h6>
                                        <span>$20.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C4 PreWorkout</h6>
                                        <span>$15.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Creatine Monohydrate</h6>
                                        <span>$20.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C4 Preworkout</h6>
                                        <span>$15.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/t1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Whey Protein</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    

    <!-- Footer Section Begin -->
    <footer class="footer spad">

    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>