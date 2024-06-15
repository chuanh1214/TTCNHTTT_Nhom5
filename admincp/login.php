<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "' AND matKhau='" . $password . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $email;
        header('Location:index.php');
    } else {
        echo '<script>alert("Email hoặc mật khẩu không đúng, vui lòng nhập lại.")</scripts>';
        header('Location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminCP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link rel="stylesheet" href="assets/css/indexResponsive.css">
    <link rel="stylesheet" href="assets/css/dangNhapStyle.css">
    <link rel="stylesheet" href="assets/css/dangNhapResponsive.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-main">
                        <a class="inner-logo" href="index.php">
                            <img src="assets/images/moneyManager.png" alt="Logo moneyManager">
                            <span class="inner-name">Money Manager</span>
                        </a>
                        <div class="short-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form">
                        <h2 class="title">Đăng Nhập</h2>

                        <form action="" autocomplete="off" method="POST">
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="password" name="password" placeholder="Mật khẩu" required>
                            <button type="submit" name="dangnhap">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row inner-main">
                <div class="item-left col-12 col-lg-8 col-md-8 col-sm-8">
                    <ul>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Xóa tài khoản</a></li>
                    </ul>
                    <p class="item-desc">Bản quyền thuộc về Nhóm 5 lớp IT6059-001</p>
                </div>
                <div class="item-right col-12 col-lg-4 col-md-4 col-sm-4">
                    <img src="assets/images/footer_logo.png" alt="Logo footer">
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>