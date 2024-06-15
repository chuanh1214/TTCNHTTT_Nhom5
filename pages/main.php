<main class="main">
    <?php
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'dangnhap') {
        include("main/dangNhap.php");
    } elseif ($tam == 'dangky') {
        include("main/dangKy.php");
    } elseif ($tam == 'quanlychitieu') {
        include("main/quanlychitieu.php");
    } elseif ($tam == 'quanlythunhap') {
        include("main/quanlythunhap.php");
    } else {
        include("main/index.php");
    }
    ?>
</main>