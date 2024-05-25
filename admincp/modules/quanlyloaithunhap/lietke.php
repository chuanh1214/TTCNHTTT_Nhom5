<?php
$sql_lietke_loaitn = "SELECT * FROM loaithunhap";
$query_lietke_loaitn = mysqli_query($mysqli, $sql_lietke_loaitn);
?>
<div class="container">
    <h1 class="pt-5">Danh sách loại thu nhập</h1>
    <a href="?action=quanlyloaithunhap&query=them" class="btn btn-danger" name="themloaitn_btn">Thêm</a>
    <!-- BANG CHI TIEU -->
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Tên loại thu nhập</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_loaitn)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $row['maLoaiTN'] ?></td>
                <td><?php echo $row['tenLoaiTN'] ?></td>
                <td><a href="?action=quanlyloaithunhap&query=sua&idloaitn=<?php echo $row['maLoaiTN'] ?>" class="btn btn-success" name="sualoaithunhap">Sửa</a>
                    <a href="modules/quanlyloaithunhap/xuly.php?idloaitn=<?php echo $row['maLoaiTN'] ?>" class="btn btn-danger" name="xoaloaithunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<script src="../../assets/bootstrap/bootstrap.bundle.min.js">
</script>