<?php
$sql_sua_loaitn = "SELECT * FROM loaithunhap WHERE maLoaiTN='$_GET[idloaitn]' LIMIT 1";
$query_sua_loaitn = mysqli_query($mysqli, $sql_sua_loaitn);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <h2 class="title">Sửa loại thu nhập</h2>
                <form action="modules/quanlyloaithunhap/xuly.php?idloaitn=<?php echo $_GET['idloaitn'] ?>" method="post">
                    <?php
                    while ($dong = mysqli_fetch_array($query_sua_loaitn)) {
                    ?>
                        <div class="form-child">
                            <label for="text">Tên loại thu nhập</label>
                            <input type="text" value="<?php echo $dong['tenLoaiTN'] ?>" name="tenloaitn">
                        </div>
                        <div class="form-child">
                            <button type="submit" name="sualoaithunhap">Cập nhật</button>
                        </div>
                    <?php
                    } ?>
                </form>
            </div>
        </div>
    </div>
</div>