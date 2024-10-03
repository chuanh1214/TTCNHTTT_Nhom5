<?php
include('../../config/config.php');
//Lấy dữ liệu từ form
$query = mysqli_query($mysqli, "SELECT * from loaichitieu");
$maChiTieu = "" . (mysqli_num_rows($query) + 1);
$tenloaict = $_POST['tenloaict'];
if (isset($_POST['themloaichitieu'])) {
    //them
    $sql_them = "INSERT INTO loaichitieu VALUES('" . $maChiTieu . "','" . $tenloaict . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location: ../../index.php?action=quanlyloaichitieu&query=lietke');
} elseif (isset($_POST['sualoaichitieu'])) {
    //sua
    $sql_update = "UPDATE loaichitieu SET tenLoaiCT='" . $tenloaict . "' WHERE maLoaiCT='$_GET[idloaict]'";
    mysqli_query($mysqli, $sql_update);
    header('Location: ../../index.php?action=quanlyloaichitieu&query=lietke');
} else {
    //xoa
    $id = $_GET['idloaict'];
    $sql_xoa = "DELETE FROM loaichitieu WHERE maLoaiCT = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../index.php?action=quanlyloaichitieu&query=lietke');
}
