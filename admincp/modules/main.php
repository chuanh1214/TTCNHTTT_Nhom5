<?php
if (isset($_GET['action'])) {
    $tam = $_GET['action'];
} else {
    $tam = '';
}
if ($tam == 'quanlyloaithunhap') {
    include("quanlyloaithunhap/them.php");
} elseif ($tam == 'quanlyloaichitieu') {
    include("quanlyloaichitieu/them.php");
} else {
    include("modules/homePage.php");
}
