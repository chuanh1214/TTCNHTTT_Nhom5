<?php
include('../../config/config.php');
$tenloaitn = $_POST['tenloaitn'];
if (isset($_POST['themloaithunhap'])) {
    $sql_them = "INSERT INTO loaithunhap(tenLoaiTN) VALUES('" . $tenloaitn . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location: ../../index.php?action=quanlyloaithunhap');
}
// elseif(isset($_POST['sualoaithunhap'])){

// }elseif(isset($_POST['xoaloaithunhap'])){
//     $
//     $sql_xoa="DELETE FROM loaithunhap WHERE "
// }
