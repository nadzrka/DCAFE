<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>D'Cafe Latte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div class="gtco-loader"></div>

    <div id="page">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="/">D'Cafe Latte</a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#reservation">Reservation</a></li>
                            @auth
                            <li class="btn-cta"><a href="{{url('logout')}}"><span>Logout</span></a></li>
                            @endauth
                            @guest
                            <li class="btn-cta"><a href="{{url('login')}}"><span>Login</span></a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner"
            style="background-image: url(assets/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <h1 class="cursive-font">All in good taste!</h1>
                            </div>
                            <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                <div class="form-wrap">
                                    <div class="tab">
                                        <div class="tab-content" id="reservation">
                                            <div class="tab-content-inner active" data-content="signup">
                                                <h3 class="cursive-font">Table Reservation</h3>
                                                <form action="#">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="date-start">Persons</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="date-start">Date</label>
                                                            <input type="text" id="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="date-start">Time</label>
                                                            <input type="text" id="time" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <input type="submit" class="btn btn-primary btn-block"
                                                                value="Reserve Now">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="gtco-section" id="menu">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2 class="cursive-font primary-color">Menu</h2>
                        <p>Beberapa pilihan menu kami</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/latte.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Caffe Latte</h2>
                                <p><span>Rp. 25.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/avo.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Avocado Ice Cream</h2>
                                <p><span>Rp. 22.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/espresso.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Espresso Coffe</h2>
                                <p><span>Rp. 20.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/lemontea.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Lemon Tea</h2>
                                <p><span>Rp. 15.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/fries.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>French Fries</h2>
                                <p><span>Rp. 17.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/hotdog.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Hotdog</h2>
                                <p><span>Rp. 25.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/burger.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Burger</h2>
                                <p><span>Rp. 30.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <a href="/" class="fh5co-card-item">
                            <figure>
                                <img src="assets/images/friedchicken.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Fried Chicken</h2>
                                <p><span>Rp. 20.000</span></p>
                                @auth
                                <button class="btn btn-primary add-to-order">Pilih</button>
                                @endauth
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <footer id="contact" class="gtco-footer" role="contentinfo"
            style="background-image: url(assets/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row row-pb-md">
                    <div class="col-md-12 text-center">
                        <div class="gtco-widget">
                            <h3>Kontak Kami</h3>
                            <ul class="gtco-quick-contact">
                                <li><a href="#"><i class="icon-phone"></i> 081234567890</a></li>
                                <li><a href="#"><i class="icon-mail2"></i> info@dcafe.latte</a></li>
                                <li><a href="#"><i class="icon-instagram"></i> @DCafeLatte</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/magnific-popup-options.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
