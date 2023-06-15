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
    <link href="cssAP/style.css" rel="stylesheet">
    <link href="cssAP/bootstrap.min.css" rel="stylesheet">
    <title>Thành viên</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="mb-0">Quản lý thành viên</h1>
                    <a href="indexAP.php?controller=user&action=create">Thêm thành viên</a>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <form class="d-flex mt-3" role="search" method="post" action="indexAP.php?controller=user">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Tên thành viên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Quyền</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($array['users'] as $user){
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $user['id_user'] ?>
                                </td>
                                <td>
                                    <?= $user['username'] ?>
                                </td>
                                <td>
                                    <?= $user['email_user'] ?>
                                </td>
                                <td>
                                    <?= $user['phone_user'] ?>
                                </td>
                                <td>
                                    <?= $user['address_user'] ?>
                                </td>
                                <td>
                                    <?= $user['role'] ?>
                                </td>
                                <td>
                                    <a href="indexAP.php?controller=user&action=edit&id_user=<?= $user['id_user'] ?>">Cập nhật</a>
                                </td>
                                <td>
                                    <a href="indexAP.php?controller=user&action=destroy&id_user=<?= $user['id_user'] ?>">Xóa</a>
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Xóa
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title" id="exampleModalLabel" style="color:red;">Cảnh báo!!!</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có chắc chắn muốn xóa thành viên này chứ !?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không xóa</button>
                                                    <button type="button" class="btn btn-warning"><a href="indexAP.php?controller=user&action=destroy&id_user=<?= $user['id_user'] ?>">Xóa</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                            for($i = 1; $i <= $array['page']; $i++){
                        ?>
                        <li class="page-item">
                            <form method="post" action="indexAP.php?controller=user&page=<?= $i ?>">
                                <input type="hidden" name="search" value="<?= $array['search'] ?>">
                                <input type="hidden" name="page" value="<?= $i ?>">
                                <button><?= $i ?></button>
                            </form>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </nav>
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
