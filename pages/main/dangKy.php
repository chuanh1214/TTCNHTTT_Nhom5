<?php
$mysqli = new mysqli("localhost", "root", "", "qlctgd");

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối MySQLi lỗi " . $mysqli->connect_error;
    exit();
}

    if(isset($_POST['dangKy'])){
        $hoTen = $_POST['full_name'];
        $sdt = $_POST['phone_number'];
        $email = $_POST['email'];
        $matKhau = $_POST['password'];

       mysqli_query($mysqli, "INSERT INTO dangky(hoTen, sdt, email, matKhau) VALUE('".$hoTen."','".$sdt."','".$email."','".$matKhau."') ");
       header('Location:index.php');
    }
?>
<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form">
                    <h2 class="title">Đăng ký tài khoản</h2>
                    <form action="" target="_blank" method="POST">
                        <input type="text" name="full_name" placeholder="Họ và tên">
                        <input type="tel" name="phone_number" placeholder="Số điện thoại">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Mật khẩu">
                        <input type="password" placeholder="Xác nhận mật khẩu">
                        <input type="checkbox" name="agree" id="agree">
                        <label for="agree">Tôi đã đọc và đồng ý với các điều khoản, điều kiện</label>
                        <button type="submit" name="dangKy">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>