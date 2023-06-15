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
                    <div class="col-lg-12">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form method="post" action="indexHP.php?controller=product">
                                    <input input type="text" name="search" value="<?= $array['search'] ?>">
                                    <button type="submit" class="site-btn">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>
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

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh mục</h4>
                            <ul>
                                <?php
                                foreach ($array['categorys'] as $category) {
                                ?>

                                    <li><a href="#"><?= $category['name_category'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sản Phẩm</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row featured__filter">
                            <?php
                            foreach ($array['products'] as $product) {
                            ?>
                                <!-- ảnh dell -->
                                <div class="col-lg-3">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg">
                                            <ul class="featured__item__pic__hover">
                                                <a href="indexHP.php?controller=product&action=sanpham&id_prd=<?= $product['id_prd'] ?>">
                                                    <img src="img/<?= $product['img_prd'] ?>">
                                                </a>
                                            </ul>
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="indexHP.php?controller=product"><?= $product['name_prd'] ?></a></h6>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->

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