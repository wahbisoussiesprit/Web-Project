<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

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
                        <!--<a href="./index.html"><img src="img/logo1.png" alt=""></a>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">




                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
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
                        <h2>Whey Protein - Payment Section</h2>
                    </div>

                </div>
            </div>

            <div class="row featured__filter justify-content-center">
              <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                  <div class="featured__item">
                     <div class="featured__item__pic set-bg" data-setbg="img/featured/n1.jpg">
                </div>

            <div class="featured__item__text text-center">
                <h6><a href="whey.php">Whey Protein</a></h6>
                <h5>$30.00</h5>
            </div>
        </div>
    </div>
    <!-- Add similar code for other products -->
</div>

    </section>
    <!-- Latest Product Section End -->



   <!-- Payment Options Section Begin -->
   <section class="payment text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="payment__item">
                        <h5>Bank Cards</h5>
                        <button class="btn btn-success pay-button" data-payment="card">Pay with Card</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="payment__item">
                        <h5>PayPal</h5>
                        <button class="btn btn-success pay-button" data-payment="paypal">Pay with PayPal</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="payment__item">
                        <h5>Cryptocurrency</h5>
                        <button class="btn btn-success pay-button" data-payment="crypto">Pay with Crypto</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Details Section Begin -->
<section class="payment-details text-center" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Payment Details</h3>
                <div id="payment-form">
                    <div id="bank-form">
                        <!-- Bank card payment form inputs -->
                        <div class="form-group">
                            <label for="card-type">Card Type</label>
                            <select class="form-control" id="card-type">
                                <option value="mastercard">Mastercard</option>
                                <option value="visa">Visa</option>
                                <option value="American Express">American Express</option>
                                <!-- Add other card types as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number">
                        </div>
                        <div class="form-group">
                            <label for="expiration">Expiration Date</label>
                            <input type="text" class="form-control" id="expiration" placeholder="MM/YY">
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" placeholder="Enter CVV">
                        </div>
                    </div>
                    <div id="paypal-form" style="display: none;">
                        <p>Enter your PayPal email address:</p>
                        <input type="email" class="form-control" id="paypal-email" placeholder="Enter PayPal email">
                    </div>

                    <div id="crypto-form" style="display: none;">
                        <p>Select a cryptocurrency:</p>
                        <select class="form-control" id="crypto-type">
                            <option value="bitcoin">Bitcoin</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="binancecoin">Binance Coin</option>
                            <option value="tether">Tether</option>
                            <option value="cardano">Cardano</option>
                            <option value="solana">Solana</option>
                            <option value="xrp">XRP</option>
                            <option value="polkadot">Polkadot</option>
                            <option value="dogecoin">Dogecoin</option>
                            <option value="usd-coin">USD Coin</option>
                            <!-- Add other top cryptocurrencies as needed -->
                        </select>
                        <p>Enter your wallet address:</p>
                        <input type="text" class="form-control" id="crypto-wallet" placeholder="Enter wallet address">
                    </div>
                </div>
                <button class="btn btn-primary confirm-payment" style="margin-top: 20px;">Confirm Payment</button>
                <p class="payment-status" style="display: none; color: green; font-weight: bold; margin-top: 10px;">Payment Successful!</p>
                <p class="error-message" style="display: none; color: red; font-weight: bold; margin-top: 10px;">Invalid details. Please check and try again.</p>
            </div>
        </div>
    </div>
</section>
<!-- Payment Details Section End -->

<script>
    // Handle payment button clicks
    document.querySelectorAll('.pay-button').forEach(button => {
        button.addEventListener('click', function () {
            const paymentType = this.getAttribute('data-payment');
            document.querySelector('.payment').style.display = 'none';
            document.querySelector('.payment-details').style.display = 'block';
            document.querySelector('.payment-status').style.display = 'none';
            document.querySelector('.error-message').style.display = 'none';

            // Show the appropriate form based on payment type
            if (paymentType === 'card') {
                document.getElementById('bank-form').style.display = 'block';
                document.getElementById('paypal-form').style.display = 'none';
                document.getElementById('crypto-form').style.display = 'none';
            } else if (paymentType === 'paypal') {
                document.getElementById('bank-form').style.display = 'none';
                document.getElementById('paypal-form').style.display = 'block';
                document.getElementById('crypto-form').style.display = 'none';
            } else if (paymentType === 'crypto') {
                document.getElementById('bank-form').style.display = 'none';
                document.getElementById('paypal-form').style.display = 'none';
                document.getElementById('crypto-form').style.display = 'block';
            }
        });
    });

    // Handle payment confirmation
    document.querySelector('.confirm-payment').addEventListener('click', function () {
        // Check if card details are valid for bank payment
        const cardNumber = document.getElementById('cardNumber').value;
        const expiration = document.getElementById('expiration').value;
        const cvv = document.getElementById('cvv').value;

        if (document.getElementById('bank-form').style.display === 'block' &&
            (cardNumber.trim() === '' || expiration.trim() === '' || cvv.trim() === '')) {
            document.querySelector('.error-message').style.display = 'block';
            return;
        }

        // Check if PayPal email is provided for PayPal payment
        const paypalEmail = document.getElementById('paypal-email').value;
        if (document.getElementById('paypal-form').style.display === 'block' && paypalEmail.trim() === '') {
            document.querySelector('.error-message').style.display = 'block';
            return;
        }

        // Check if wallet address is provided for crypto payment
        const cryptoWallet = document.getElementById('crypto-wallet').value;
        if (document.getElementById('crypto-form').style.display === 'block' && cryptoWallet.trim() === '') {
            document.querySelector('.error-message').style.display = 'block';
            return;
        }

        // Perform payment processing here, then show success message
        document.querySelector('.error-message').style.display = 'none';
        document.querySelector('.payment-details').style.display = 'none';
        document.querySelector('.payment-status').style.display = 'block';
    });</script>




    

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