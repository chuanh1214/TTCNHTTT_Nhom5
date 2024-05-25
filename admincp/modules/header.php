<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
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
                            <li><a href="index.php?action=quanlyloaithunhap&query=lietke">Quản lý loại thu nhập</a></li>
                            <li><a href="index.php?action=quanlyloaichitieu&query=lietke">Quản lý loại chi tiêu</a></li>
                            <li><a href="index.php?dangxuat=1">Đăng xuất : <?php if (isset($_SESSION['dangnhap'])) {
                                                                                echo $_SESSION['dangnhap'];
                                                                            } ?></a></li>
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