<?php
if (isset($_GET['action']) && $_GET['query']) {
    $tam = $_GET['action'];
    $query = $_GET['query'];
} else {
    $tam = '';
    $query = '';
}
if ($tam == 'quanlyloaithunhap' && $query == 'lietke') {
    include("quanlyloaithunhap/lietke.php");
} elseif ($tam == 'quanlyloaithunhap' && $query == 'them') {
    include("quanlyloaithunhap/them.php");
} elseif ($tam == 'quanlyloaithunhap' && $query == 'sua') {
    include("quanlyloaithunhap/sua.php");
} elseif ($tam == 'quanlyloaichitieu') {
    include("quanlyloaichitieu/them.php");
    include("quanlyloaichitieu/lietke.php");
} else {
    include("modules/homePage.php");
}
