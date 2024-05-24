<main class="main">
    <?php
    if (isset($_GET['logon'])) {
        $tam = $_GET['logon'];
    } else {
        $tam = '';
    }
    if ($tam == 'dangnhap') {
        include("main/dangNhap.php");
    } elseif ($tam == 'dangky') {
        include("main/dangKy.php");
    } else {
        include("main/index.php");
    }
    ?>
</main>