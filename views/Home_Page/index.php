<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="cssHP/style1.css" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
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
                                <ul>
                                    <li><a href="indexHP.php?controller=customer&action=dangnhap">Đăng nhập</a></li>
                                    <li><a href="indexHP.php?controller=customer&action=dangky">Đăng ký</a></li>
                                </ul>
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
                        <a href="indexHP.php?controller=customer&action=trangchu"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="indexHP.php?controller=customer&action=trangchu">Trang chủ</a></li>
                            <li><a href="indexHP.php?controller=product">Cửa hàng</a></li>
                            </li>
                        </ul>
                    </nav>
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
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div action = "post" class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span > Danh mục</span>
                        </div>
                        <ul>
                        <?php
                            foreach($array['categorys'] as $category){
                        ?> 
                        
                            <li><a href="#"><?= $category['name_category'] ?></a></li>
                        <?php
                            }
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form  method="post" action="indexHP.php">
                                <input input type="text" name="search" value="<?= $array['search'] ?>">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__item set-bg" data-setbg="img/trangchu.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                <?php
                        foreach($array['products'] as $product){
                    ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" >
                        <a href="indexHP.php?controller=product&action=sanpham&id_prd=<?= $product['id_prd'] ?>">
                                    <img src="img/<?= $product['img_prd'] ?>" >
                                </a>
                        </div>
                    </div> 
                    <?php
                            }
                        ?>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                    <?php
                        foreach($array['products'] as $product){
                    ?> 
                <!-- ảnh dell -->
                <div class="col-lg-3">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                            <ul class="featured__item__pic__hover">
                            <a href="indexHP.php?controller=product&action=sanpham&id_prd=<?= $product['id_prd'] ?>">
                                    <img src="img/<?= $product['img_prd'] ?>" >
                                </a>
                            </ul>
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?= $product['name_prd'] ?></a></h6>
                        </div>
                        
                    </div>
                </div>
                <?php
                            }
                        ?>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo1.png" alt=""></a>
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

        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="jsHP/jquery-3.3.1.min.js"></script>
    <script src="jsHP/bootstrap.min.js"></script>
    <script src="jsHP/jquery.nice-select.min.js"></script>
    <script src="jsHP/jquery-ui.min.js"></script>
    <script src="jsHP/jquery.slicknav.js"></script>
    <script src="jsHP/mixitup.min.js"></script>
    <script src="jsHP/owl.carousel.min.js"></script>
    <script src="jsHP/main.js"></script>



</body>

</html>