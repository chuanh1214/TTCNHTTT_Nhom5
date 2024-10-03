<?php
$maNguoiDung = $_SESSION['dangky'];
$sql_show_list = mysqli_query($mysqli, "SELECT * from chitieu where maNguoiDung = '" . $maNguoiDung . "'");
$sql_chi_tieu = mysqli_query($mysqli, "SELECT * from chitieu");
$maChiTieu = "" . (mysqli_num_rows($sql_chi_tieu) + 1);
$tenKhoanChi = $_POST['tenKhoanChi'];
$soTien = $_POST['soTien'];
$ghiChu = $_POST['ghiChu'];
$ngay = $_POST['ngay'];
$maLoaiCT = $_POST['loaiCT'];
//Thêm khoản chi tiêu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addCT'])) {

        $sql_addCT = mysqli_query($mysqli, "INSERT into chitieu values('" . $maChiTieu . "','" . $tenKhoanChi . "','" . $soTien . "','" . $ghiChu . "','" . $ngay . "','" . $maLoaiCT . "','" . $maNguoiDung . "')");
        header("Location: index.php?quanly=quanlychitieu&query=lietke");
    }
}
//Lấy dữ liệu từ form
$tenloaict = $_POST['tenloaict'];
if (isset($_POST['themloaichitieu'])) {
    //them
    $sql_them = "INSERT INTO loaichitieu(tenLoaiCT) VALUES('" . $tenloaict . "')";
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
