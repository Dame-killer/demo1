<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Cập nhật chi tiết sản phẩm</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-left rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="mb-0">Cập nhật tiết sản phẩm</h1>
                </div>
                <?php
                    foreach($array['product_details'] as $product_detail){
                ?>
                <form action="indexAP.php?controller=product_detail&action=update" method="post">
                    <input type="hidden" name="id_prd_detail" value="<?= $product_detail['id_prd_detail'] ?>">
                    <div class="form-floating mb-3">
                        <select name="id_prd" required>
                            <option value="">- Sản phẩm -</option>
                            <?php
                                foreach($array['products'] as $product){
                            ?>
                            <option value="<?= $product['id_prd'] ?>"
                            <?php
                                if($product['id_prd'] == $product_detail['id_prd']){
                                    echo 'selected';
                                }
                            ?>>
                                <?= $product['name_prd'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="cpu" value="<?= $product_detail['cpu'] ?>" required>
                        <label for="floatingInput">CPU</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ram" value="<?= $product_detail['ram'] ?>" required>
                        <label for="floatingInput">RAM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="hard_drive" value="<?= $product_detail['hard_drive'] ?>" required>
                        <label for="floatingInput">Ổ cứng</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="graphics_card" value="<?= $product_detail['graphics_card'] ?>" required>
                        <label for="floatingInput">Card đồ họa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="screen" value="<?= $product_detail['screen'] ?>" required>
                        <label for="floatingInput">Màn hình</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="color_prd" value="<?= $product_detail['color_prd'] ?>" required>
                        <label for="floatingInput">Màu sắc</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="quantity" value="<?= $product_detail['quantity'] ?>" required>
                        <label for="floatingInput">Số lượng</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="price" value="<?= $product_detail['price'] ?>" required>
                        <label for="floatingInput">Giá</label>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-25 mb-4">Cập nhật</button>
                </form>
                <?php
                    }
                ?>
            </div>
        </div>
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