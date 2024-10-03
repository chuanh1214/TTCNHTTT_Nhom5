<?php
$sql_sua_loaitn = "SELECT * FROM loaithunhap WHERE maLoaiTN='$_GET[idloaitn]' LIMIT 1";
$query_sua_loaitn = mysqli_query($mysqli, $sql_sua_loaitn);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <h2 class="title">Sửa loại thu nhập</h2>
                <form action="main/quanlychitieu/xuly.php?idloaitn=<?php echo $_GET['idloaitn'] ?>" method="post">
                    <div class="form-child">
                        <label for="text">Tên khoản chi tiêu</label>
                        <input type="text" value="<?php echo $dong['tenLoaiCT'] ?>" name="tenKhoanChi">
                    </div>
                    <div class="form-child">
                        <label for="text">Số tiền</label>
                        <input type="text" value="<?php echo $dong['soTien'] ?>" name="soTien">
                    </div>
                    <div class="form-child">
                        <label for="text">Ghi chú</label>
                        <input type="text" value="<?php echo $dong['ghiChu'] ?>" name="ghiChu">
                    </div>
                    <div class="form-child">
                        <label for="text">Ngày</label>
                        <input type="date" value="<?php echo $dong['ngay'] ?>" name="ngay">
                    </div>
                    <div class="form-child">
                        <label for="text">Loại chi tiêu</label>
                        <select name="loaiCT" required>
                            <?php
                            $sql_LoaiCT = mysqli_query($mysqli, "SELECT * from loaichitieu");
                            if (mysqli_num_rows($sql_LoaiCT) == 0) {
                                echo '<option value="rỗng"></option>';
                            } else {
                                while ($row = mysqli_fetch_array($sql_LoaiCT)) {
                                    echo '<option value="' . $row["maLoaiCT"] . '">' . $row["tenLoaiCT"] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-child">
                        <button type="submit" name="updateCT">Cập Nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>