<?php
$sql_lietke_loaict = "SELECT * FROM loaichitieu";
$query_lietke_loaict = mysqli_query($mysqli, $sql_lietke_loaict);
?>
<div class="container">
    <h1 class="pt-5">Danh sách loại chi tiêu</h1>
    <a href="?action=quanlyloaichitieu&query=them" class="btn btn-danger" name="themloaict_btn">Thêm</a>
    <!-- BANG CHI TIEU -->
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Tên loại chi tiêu</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_loaict)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $row['maLoaiCT'] ?></td>
                <td><?php echo $row['tenLoaiCT'] ?></td>
                <td><a href="?action=quanlyloaichitieu&query=sua&idloaict=<?php echo $row['maLoaiCT'] ?>" class="btn btn-success" name="sualoaichitieu">Sửa</a>
                    <a href="modules/quanlyloaichitieu/xuly.php?idloaict=<?php echo $row['maLoaiCT'] ?>" class="btn btn-danger" name="xoaloaichitieu" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<script src="../../assets/bootstrap/bootstrap.bundle.min.js">
</script>