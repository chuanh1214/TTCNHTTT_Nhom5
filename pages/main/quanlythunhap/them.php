<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <h2 class="title">Thêm khoản chi tiêu mới</h2>
                <form action="main/quanlyloaithunhap/xuly.php" method="post">
                    <div class="form-child">
                        <label for="text">Tên khoản chi tiêu</label>
                        <input type="text" name="tenKhoanChi">
                    </div>
                    <div class="form-child">
                        <label for="text">Số tiền</label>
                        <input type="text" name="soTien">
                    </div>
                    <div class="form-child">
                        <label for="text">Ghi chú</label>
                        <input type="text" name="ghiChu">
                    </div>
                    <div class="form-child">
                        <label for="text">Ngày</label>
                        <input type="date" name="ngay">
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
                        <button type="submit" name="addCT">Thêm</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>