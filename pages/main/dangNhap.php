<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "' AND matKhau ='" . $password . "'";
    $row1 = mysqli_query($mysqli, $sql);
    $count1 = mysqli_num_rows($row1);
    if ($count1) {
        $row_data = mysqli_fetch_array($row1);
        $_SESSION['dangky'] = $row_data['email'];
        header('Location:index.php');
    } else {
        header('Location:index.php?quanly=dangnhap');
    }
}
?>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form">
                    <h2 class="title">Đăng Nhập</h2>
                    <form action="" method="POST">
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Mật khẩu" required>
                        <button type="submit" name="dangnhap">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>