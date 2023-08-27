<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bull Sup</title>

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
                            <ul>
                                <li><i class="fa fa-envelope"></i>Support.text@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                                <li style="text-align: center;"><b>Welcome To Our Humble Client. Please Make sure to Enjoy your shopping</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__auth">
                            <a href="./index.html" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
            <div class="row">
                <div class="col-lg-9">
                    <div class="hero__search">
                    <div class="hero__search__form">
                    <form action="search.php" method="GET">
                        <input type="text" name="search_query" placeholder="Search products...">
                        <button type="submit">Search</button>
                    </form>
                </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+216 58008122</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Products</h2>
                    </div>
                    
                </div>
            </div>
</div>


<?php
// Include the db.php file to establish the database connection
require_once __DIR__ . '/../config/db.php';

// Fetch all records from the front_products table
$query = "SELECT idf_p, namef_p, pricef_p, image_url FROM front_products";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = strtolower(str_replace([' ', '-'], '', $row['namef_p']));
        $productFileName = '';

        // Define custom URLs for specific products
        if ($productName == 'wheyprotein') {
            $productFileName = 'whey.php';
        } elseif ($productName == 'seriousmass') {
            $productFileName = 'mass.php';
        } elseif ($productName == 'creatine') {
            $productFileName = 'creatine.php';
        } elseif ($productName == 'CreatineMonohydrate') {
            $productFileName = 'creatine.php';
        } elseif ($productName == 'testoboost') {
            $productFileName = 'testoboost.php';
        } elseif ($productName == 'omega3') {
            $productFileName = 'omega3.php';
        } elseif ($productName == 'carnitine') {
            $productFileName = 'carnitine.php';
        } elseif ($productName == 'c4preworkout') {
            $productFileName = 'c4.php';
        } elseif ($productName == 'caseine') {
            $productFileName = 'caseine.php';
        } else {
            // For other products, use the generic product name
            $productFileName = $productName . '.php';
        }

        echo '<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">';
        echo '<a href="' . $productFileName . '">';
        echo '<div class="featured__item" data-product-id="' . $row['idf_p'] . '">';
        echo '<div class="featured__item__pic set-bg" data-setbg="' . $row['image_url'] . '">';
        echo '</div>';
        echo '<div class="featured__item__text">';
        echo '<h6><a href="' . $productFileName . '">' . $row['namef_p'] . '</a></h6>';
        echo '<h5>$' . $row['pricef_p'] . '</h5>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }
} else {
    echo 'No records found.';
}

// Close the database connection
$conn->close();
?>


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