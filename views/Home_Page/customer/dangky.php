<head>
    <link rel="stylesheet" href="cssHP/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="cssHP/style1.css" type="text/css">
</head>
<body>
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Đăng ký</h3>
                </div>
                <form action="indexHP.php?controller=customer&action=luu" method="post">
                <div class="form-floating mb-3">
                    <label for="floatingInput">Họ và Tên</label>
                    <input name="name_customer" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    
                </div>
                 <div class="form-floating mb-4">
                 <label for="floatingPassword">Mật khẩu</label>
                    <input name="password_customer"  type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    
                </div>
                <div class="form-floating mb-3">
                    <label for="floatingInput">Email</label>
                    <input name="email_customer" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    
                </div>
                <div class="form-floating mb-4">
                    <label for="floatingPassword">Số điện thoại</label>
                    <input name="phone_customer"  type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    
                </div>
                <div class="form-floating mb-4">
                    <label for="floatingPassword">Địa chỉ</label>
                    <input name="address_customer"  type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    
                </div>
                <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</div>   
</body>
