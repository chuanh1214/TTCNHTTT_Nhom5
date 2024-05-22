<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link rel="stylesheet" href="assets/css/indexResponsive.css">
</head>

<body>

    <!-- Header  -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-main">
                        <a class="inner-logo" href="./index.php">
                            <img src="assets/images/moneyManager.png" alt="Logo moneyManager">
                            <span class="inner-name">Money Manager</span>
                        </a>
                        <div class="inner-menu">
                            <ul>
                                <li><a href="dangKy.php">Đăng ký</a></li>
                                <li><a href="dangNhap.php">Đăng nhập</a></li>
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

    <!-- Main-->
    <main class="main">
        <!-- Section One  -->
        <div class="section-one">
            <div class="container">
                <div class="row inner-main list-group-horizontal">
                    <div class="col-sm-6 col-md-6 col-12">
                        <div class="inner-text">
                            <p class="inner-desc">Cách dễ nhất
                                <br>để quản lý chi tiêu gia đình
                            </p>
                            <p class="inner-title">Money Manager</p>
                        </div>
                    </div>

                    <div class="inner-image col-sm-6 col-md-6 col-12">
                        <img src="assets/images/sec-one-person.png" alt="This is an image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section One  -->

        <!-- Rank  -->
        <div class="rank">
            <div class="container">
                <div class="row rank-list">
                    <div class="rank-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <i class="fa-solid fa-users"></i>
                        <p>20M+</p><span>Người dùng</span>
                    </div>
                    <div class="rank-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <i class="fa-regular fa-comment-dots"></i>
                        <p>270K</p><span>Bình luận</span>
                    </div>
                    <div class="rank-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <i class="fa-regular fa-star"></i>
                        <p>4.7</p><span>Đánh giá</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Rank -->

        <!-- Section Two  -->
        <div class="section-two">
            <div class="container">
                <div class="row inner-list">
                    <div class="inner-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="item-symbol">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="item-body">
                            <span class="item-title">Sự quản lý hoàn hảo</span>
                            <p class="item-desc">Quản lý tất cả các khoản chi tiêu tiền mặt, tài khoản ngân hàng, ví điện tử và ví tiền mã hóa của bạn.
                            </p>
                        </div>
                    </div>

                    <div class="inner-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="item-symbol">
                            <i class="fa-solid fa-coins"></i>
                        </div>
                        <div class="item-body">
                            <span class="item-title">Tổng quan thu chi</span>
                            <p class="item-desc">Xem tổng thu nhập và chi phí của bạn trong nháy mắt và ở một nơi.
                            </p>
                        </div>
                    </div>

                    <div class="inner-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="item-symbol">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                        <div class="item-body">
                            <span class="item-title">Ngân sách thông minh</span>
                            <p class="item-desc">Để tiết kiệm tiền cho việc mua một chiếc xe mới, kỳ nghỉ mơ ước hoặc một đại học hàng đầu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Two  -->
    </main>
    <!--End Main-->

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
</body>

</html>