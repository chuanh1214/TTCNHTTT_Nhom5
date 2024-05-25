<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header('Location:login.php');
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
    <link rel="stylesheet" href="assets/css/qlloaithunhap.css">
    <link rel="stylesheet" href="assets/css/themsuaxoaQLLTN.css">
    <link rel="stylesheet" href="assets/css/qlloaichitieu.css">
    <link rel="stylesheet" href="assets/css/themsuaxoaQLLCT.css">
</head>

<body>
    <?php
    include("config/config.php");
    include("modules/header.php");
    include("modules/main.php");
    include("modules/footer.php");
    ?>
    <script src="assets/bootstrap/bootstrap.bundle.min.js">
    </script>
</body>

</html>