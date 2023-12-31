<?php 
$errors = [];
if(empty($_POST["txtemail"])){
    $errors['email']['require'] = 'Email không được để trống';
}else{
    if(!filter_var($_POST["txtemail"],FILTER_VALIDATE_EMAIL)){
        $errors['email']['invalid'] = 'Email không hợp lệ';
    }
} 
if(empty($errors)){
    echo "Validate thành công";
} else{
    echo "Validate không thành công";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no">
    <link rel="preconnect" href="https://">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Đăng nhập - ABC Shop</title>
    <link href="../inc/css/app.css" rel="stylesheet">
    <script src="../inc/js/app.js"></script>
    <link href="https://" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Xin chào!</h1>
                            <p class="lead">Vui lòng đăng nhập để tiếp tục</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form action="index.php" class="needs-validated" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="txtemail" placeholder="Nhập email"
                                            value="<?php echo (!empty($_POST['txtemail']))? $_POST['txtemail'] :false;  ?>"/>
                                            <?php echo (!empty($errors['email']['require']))?
                                            '<div class="invalid-feedback">
                                                '. $errors['email']['require'].'
                                            </div>':false;
                                            ?>
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mật khẩu</label>
                                            <input class="form-control form-control-lg" type="password" name="txtmatkhau" placeholder="Nhập mật khẩu" />
                                        </div>
                                        <div class="d-grid gap-2 my-3">
                                            <input type="hidden" name="action" value="xldangnhap">
                                            <input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            Chưa có tài khoản? <a href="index.php?action=dangky">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>