<head>
    <link rel="stylesheet" href="cssHP/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/style1.css" type="text/css">
</head>
<body>
    <div class="container-fluid" >
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Đăng nhập</h3>
                </div>
                <form method="post" action="indexHP.php?controller=customer&action=truycapdangnhap">
                    <div class="form-floating mb-3">
                    <label for="floatingInput">Email</label>
                        <input name="email_customer" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingPassword">Mật khẩu</label>
                        <input name="password_customer" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Đăng nhập</button>
                    <p class="text-center mb-0">Bạn không có tài khoản? <a href="indexHP.php?controller=customer&action=dangky">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>