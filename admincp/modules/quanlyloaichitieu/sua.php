<?php
$sql_sua_loaict = "SELECT * FROM loaichitieu WHERE maLoaiCT='$_GET[idloaict]' LIMIT 1";
$query_sua_loaict = mysqli_query($mysqli, $sql_sua_loaict);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <h2 class="title">Sửa loại chi tiêu</h2>
                <form action="modules/quanlyloaichitieu/xuly.php?idloaict=<?php echo $_GET['idloaict'] ?>" method="post">
                    <?php
                    while ($dong = mysqli_fetch_array($query_sua_loaict)) {
                    ?>
                        <div class="form-child">
                            <label for="text">Tên loại chi tiêu</label>
                            <input type="text" value="<?php echo $dong['tenLoaiCT'] ?>" name="tenloaict">
                        </div>
                        <div class="form-child">
                            <button type="submit" name="sualoaichitieu">Cập nhật</button>
                        </div>
                    <?php
                    } ?>
                </form>
            </div>
        </div>
    </div>
</div>