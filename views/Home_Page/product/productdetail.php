<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laptop LM</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="cssHP/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="cssHP/nice-select.css" type="text/css">
    <link rel="stylesheet" href="cssHP/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/style.css" type="text/css">
</head>

<body>

    <!-- Breadcrumb Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="indexHP.php?controller=customer&action=danngky"><i class="fa fa-user"></i>Đăng xuất</a>
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
                        <a href="indexHP.php"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="indexHP.php">Trang chủ</a></li>
                            <li><a href="indexHP.php?controller=product">Cửa hàng</a></li>
                            </li>
                        </ul>
                    </nav>
                    <!-- <div class="col-lg-12">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form method="post" action="indexHP.php?controller=product">
                                    <input input type="text" name="search" value="<?= $array['search'] ?>">
                                    <button type="submit" class="site-btn">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="indexHP.php?controller=product&action=view_cart"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>

        </div>
    </header>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img src="img/<?= $products['img_prd'] ?>">
                        </div>
                        <!-- <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?= $products['name_prd'] ?></h3>
                            <div id="config-holder">
                                <div>
                                    <span class="name">CPU: </span>
                                    <button><?= $products['cpu'] ?></button>
                                </div>
                                <div>
                                    <span class="name">Ram: </span>
                                    <button><?= $products['ram'] ?></button>
                                </div>
                                <div>
                                    <span class="name">Màn hình: </span>
                                    <button><?= $products['screen'] ?></button>
                                </div>
                                <div>
                                    <span class="name">Ổ cứng: </span>
                                    <button><?= $products['hard_drive'] ?></button>
                                </div>
                                <div>
                                    <span class="name">Card đồ họa: </span>
                                    <button><?= $products['graphics_card'] ?></button>
                                </div>
                                <div>
                                    <span class="name">Màu: </span>
                                    <button><?= $products['color_prd'] ?></button>
                                </div>
                                <div>
                                    <span class="name">Số lượng: </span>
                                    <button><?= $products['quantity'] ?></button>
                                </div>
                            </div>
                            <!-- <div class="product__details__quantity">
                                <div class="quantity">
                                    Số lượng:
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </div> -->
                       
                        <div class="product__details__price"><?= $products['price'] ?> VNĐ</div>
                        <a href="#" class="primary-btn">Thêm vào giỏ</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->



    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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