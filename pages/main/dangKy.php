<?php
if (isset($_POST['dangKy'])) {
    $hoTen = $_POST['full_name'];
    $sdt = $_POST['phone_number'];
    $email = $_POST['email'];
    $matKhau = $_POST['password'];
    $row = mysqli_query($mysqli, "SELECT * from nguoidung");
    $count = mysqli_num_rows($row);
    $maTaiKhoan = "" . ($count + 1);
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO taikhoan VALUE('" . $maTaiKhoan . "','" . $email . "','" . $matKhau . "')");
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO nguoidung(maNguoiDung,hoTen, sdt, email, maTaiKhoan) VALUE('" . $maTaiKhoan . "','" . $hoTen . "','" . $sdt . "','" . $email . "','" . $maTaiKhoan . "') ");
    if ($sql_dangky) {
        $_SESSION['dangky'] = $email;
        header('Location:index.php');
    }
}
?>
<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form">
                    <h2 class="title">Đăng ký tài khoản</h2>
                    <form action="" method="POST">
                        <input type="text" name="full_name" placeholder="Họ và tên" required>
                        <input type="tel" name="phone_number" placeholder="Số điện thoại" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Mật khẩu" required>
                        <input type="password" placeholder="Xác nhận mật khẩu" required>
                        <input type="checkbox" name="agree" id="agree" required>
                        <label for="agree">Tôi đã đọc và đồng ý với các điều khoản, điều kiện</label>
                        <button type="submit" name="dangKy">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>