<?php
$maNguoiDung = $_SESSION['dangky'];
$sql_show_list = mysqli_query($mysqli, "SELECT * from chitieu where maNguoiDung = '" . $maNguoiDung . "'");
?>
<div class="container">
    <h1 class="pt-5">Danh sách thu nhập</h1>
    <a href="?quanly=quanlythunhap&query=them" class="btn btn-danger" name="addTN_btn">Thêm</a>
    <!-- BANG CHI TIEU -->
    <table border="1">
        <?php
        if (mysqli_num_rows($sql_show_list) == 0) {
            echo "Danh sách trống";
        } else {
        ?>
            <tr>
                <th>Tên khoản thu nhập</th>
                <th>Số tiền</th>
                <th>Ghi chú</th>
                <th>Ngày</th>
                <th>Loại thu nhập</th>
                <th colspan="1">Thao tác</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($sql_show_list)) {

            ?>
                <tr>
                    <td><?php echo $row['tenKhoanChi'] ?></td>
                    <td><?php echo $row['soTien'] ?></td>
                    <td><?php echo $row['ghiChu'] ?></td>
                    <td><?php echo $row['ngay'] ?></td>
                    <td><?php
                        $sql_LoaiTN = mysqli_query($mysqli, "SELECT * from loaichitieu where maLoaiTN = '" . $row['maLoaiTN'] . "'");
                        $loaichitieu = mysqli_fetch_array($sql_LoaiTN);
                        echo $loaichitieu['tenLoaiTN'] ?></td>
                    <td><a href="?action=quanlythunhap&query=sua&idloaict=<?php echo $row['maLoaiTN'] ?>" class="btn btn-success" name="suathunhap">Sửa</a>
                        <a href="modules/quanlythunhap/xuly.php?idloaict=<?php echo $row['maLoaiTN'] ?>" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>

                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>