<?php
include('../../config/config.php');
//Lấy dữ liệu từ form
$tenloaitn = $_POST['tenloaitn'];
if (isset($_POST['themloaithunhap'])) {
    //them
    $sql_them = "INSERT INTO loaithunhap(tenLoaiTN) VALUES('" . $tenloaitn . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location: ../../index.php?action=quanlyloaithunhap&query=lietke');
} elseif (isset($_POST['sualoaithunhap'])) {
    //sua
    $sql_update = "UPDATE loaithunhap SET tenLoaiTN='" . $tenloaitn . "' WHERE maLoaiTN='$_GET[idloaitn]'";
    mysqli_query($mysqli, $sql_update);
    header('Location: ../../index.php?action=quanlyloaithunhap&query=lietke');
} else {
    //xoa
    $id = $_GET['idloaitn'];
    $sql_xoa = "DELETE FROM loaithunhap WHERE maLoaiTN = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../index.php?action=quanlyloaithunhap&query=lietke');
}
