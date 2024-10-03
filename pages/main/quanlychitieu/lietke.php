<?php
$maNguoiDung = $_SESSION['dangky'];
$sql_show_list = mysqli_query($mysqli, "SELECT * from chitieu where maNguoiDung = '" . $maNguoiDung . "'");
?>
<div class="container">
    <h1 class="pt-5">Danh sách chi tiêu</h1>
    <a href="?quanly=quanlychitieu&query=them" class="btn btn-danger" name="CT_btn">Thêm</a>
    <!-- BANG CHI TIEU -->
    <table border="1">
        <?php
        if (mysqli_num_rows($sql_show_list) == 0) {
            echo "Danh sách trống";
        } else {
        ?>
            <tr>
                <th>Tên khoản chi tiêu</th>
                <th>Số tiền</th>
                <th>Ghi chú</th>
                <th>Ngày</th>
                <th>Loại chi tiêu</th>
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
                        $sql_LoaiCT = mysqli_query($mysqli, "SELECT * from loaichitieu where maLoaiCT = '" . $row['maLoaiCT'] . "'");
                        $loaichitieu = mysqli_fetch_array($sql_LoaiCT);
                        echo $loaichitieu['tenLoaiCT'] ?></td>
                    <td><a href="?quanly=quanlychitieu&query=sua&idloaict=<?php echo $row['maLoaiCT'] ?>" class="btn btn-success" name="sualoaichitieu">Sửa</a>
                        <a href="main/quanlychitieu/xuly.php?idloaict=<?php echo $row['maLoaiCT'] ?>" class="btn btn-danger" name="xoaloaichitieu" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>

                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>