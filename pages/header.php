<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
    header("Location:index.php");
}
?>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-main">
                    <a class="inner-logo" href="index.php">
                        <img src="assets/images/moneyManager.png" alt="Logo moneyManager">
                        <span class="inner-name">Money Manager</span>
                    </a>
                    <div class="inner-menu">
                        <ul>
                            <?php
                            if (isset($_SESSION['dangky'])) {
                            ?>
                                <li><a href="index.php?quanly=quanlythunhap">Thu Nhập</a></li>
                                <li><a href="index.php?quanly=quanlychitieu">Chi Tiêu</a></li>
                                <li><a href="#">Tiết kiệm</a></li>
                                <li><a href="#">Quản Lý Ngân Sách</a></li>
                                <!-- <li><a href="#">Xem Đánh Dấu</a></li>
                                <li><a href="#">Xem Thống Kê</a></li> -->
                                <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                                <li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></li>

                            <?php
                            } else {
                            ?>
                                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                                <li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>