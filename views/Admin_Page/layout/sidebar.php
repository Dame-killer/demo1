<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="cssAP/bootstrap.min.css" rel="stylesheet">
    <link href="cssAP/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="indexAP.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Admin Page</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="indexAP.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="indexAP.php?controller=user" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Thành viên</a>
                    <a href="indexAP.php?controller=customer" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Khách hàng</a>
                    <a href="indexAP.php?controller=manufacturer" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Hãng sản xuất</a>
                    <a href="indexAP.php?controller=category" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Danh mục</a>
                    <a href="indexAP.php?controller=product" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sản phẩm</a>
                    <a href="indexAP.php?controller=product_detail" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sản phẩm chi tiết</a>
                    <a href="indexAP.php?controller=order" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Đơn hàng</a>
            </nav>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="jsAP/main.js"></script>
</body>

</html>