<?php
if (isset($POST['dangnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $email;
        header('Location:index.php');
    } else {
        echo '<script>alert("Email hoặc mật khẩu không đúng, vui lòng nhập lại.")</scripts?>';
        header('Location:dangNhap.php');
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
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Mật khẩu">
                        <button type="submit">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>