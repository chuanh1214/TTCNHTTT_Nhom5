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
} elseif ($tam == 'quanlyloaichitieu' && $query == 'lietke') {
    include("quanlyloaichitieu/lietke.php");
} elseif ($tam == 'quanlyloaichitieu' && $query == 'them') {
    include("quanlyloaichitieu/them.php");
} elseif ($tam == 'quanlyloaichitieu' && $query == 'sua') {
    include("quanlyloaichitieu/sua.php");
} else {
    include("modules/homePage.php");
}
