<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/dangKyStyle.css">
    <link rel="stylesheet" href="./assets/css/dangKyResponsive.css">
</head>
<body>
    
    <!-- Header  -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-main">
                        <a class="inner-logo" href="./index.html">
                            <img src="./assets/images/moneyManager.png" alt="Logo moneyManager">
                            <span class="inner-name">Money Manager</span>
                        </a>
                        <div class="inner-menu">
                            <ul>
                                <li><a href="./dangKy.html">Đăng ký</a></li>
                                <li><a href="./dangNhap.html">Đăng nhập</a></li>
                                <li><a href="#">Đổi mật khẩu</a></li>
                            </ul>
                        </div>
                        <div class="short-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- End header  -->

    <!-- Register  -->
      <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form">
                        <h2 class="title">Đăng ký tài khoản</h2>
                    
                        <form action="https://www.w3schools.com/action_page.php" target="_blank">
                          <input type="text" name="full_name" placeholder="Họ và tên">
                          <input type="tel" name="phone_number" placeholder="Số điện thoại">
                          <input type="email" name="email" placeholder="Email">
                          <input type="password" name="password" placeholder="Mật khẩu">
                          <input type="password" name="password" placeholder="Xác nhận mật khẩu">
                          <input type="checkbox" name="agree" id="agree">
                          <label for="agree">Tôi đã đọc và đồng ý với các điều khoản, điều kiện</label>
                          <button type="submit">Đăng ký</button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Register  -->

    <!-- Footer  -->
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
                    <img src="./assets/images/footer_logo.png" alt="Logo footer">
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <script src="assets/bootstrap/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>