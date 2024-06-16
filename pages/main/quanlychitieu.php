<?php
$maNguoiDung = $_SESSION['dangky'];
$sql_show_list = mysqli_query($mysqli, "SELECT * from chitieu where maNguoiDung = '" . $maNguoiDung . "'");
$maChiTieu = "" . (mysqli_num_rows($sql_show_list) + 1);

//Thêm khoản chi tiêu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addCT'])) {
        $tenKhoanChi = $_POST['tenKhoanChi'];
        $soTien = $_POST['soTien'];
        $ghiChu = $_POST['ghiChu'];
        $ngay = $_POST['ngay'];
        $maLoaiCT = $_POST['loaiCT'];
        $sql_addCT = mysqli_query($mysqli, "INSERT into chitieu values('" . $maChiTieu . "','" . $tenKhoanChi . "','" . $soTien . "','" . $ghiChu . "','" . $ngay . "','" . $maLoaiCT . "','" . $maNguoiDung . "')");
        header("Location: index.php?quanly=quanlychitieu");
    }
}

//Sửa khoản chi tiêu

//Xóa khoản chi tiêu
?>
<!-- BODY Quan ly chi tieu -->
<div class="container">
    <h1 class="pt-5">Danh sách chi tiêu</h1>
    <!-- THEM -->
    <button onclick="momodal()"><span>Thêm</span></button>
    <div class="nenmodal" id="nenmodal-1">
        <div class="nenmodal2"></div>
        <div class="ndmodal">
            <div class="closemodal"><button onclick="momodal()">×</button></div>
            <div class="titlemodal">Thêm khoản chi tiêu mới</div>
            <div class="container1">
                <div class="row">
                    <div class="col-12">
                        <div class="form">
                            <form action="" method="post">
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
        </div>
    </div>
    <!-- END THEM -->

    <!-- SUA -->
    <div class="nenmodal" id="nenmodal-2">
        <div class="nenmodal2"></div>
        <div class="ndmodal">
            <div class="closemodal"><button onclick="momodal2()">×</button></div>
            <div class="titlemodal">Sửa khoản chi tiêu </div>
            <div class="container1">
                <div class="row">
                    <div class="col-12">
                        <div class="form">
                            <form action="" method="post">

                                <div class="form-child">
                                    <label for="text">Tên khoản chi tiêu</label>
                                    <input type="text" name="full_name">
                                </div>
                                <div class="form-child">
                                    <label for="text">Số tiền</label>
                                    <input type="tel" name="phone_number">
                                </div>
                                <div class="form-child">
                                    <label for="text">Ghi chú</label>
                                    <input type="email" name="email">
                                </div>
                                <div class="form-child">
                                    <label for="text">Ngày</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="form-child">
                                    <label for="text">Loại chi tiêu</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="form-child">
                                    <button type="submit">Cập Nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SUA -->

    <!-- XOA -->
    <div class="nenmodal" id="nenmodal-3">
        <div class="nenmodal2"></div>
        <div class="ndmodal">
            <div class="closemodal"><button onclick="momodal3()">×</button></div>
            <div class="titlemodal">Xóa khoản chi tiêu </div>
            <p>Xác nhận muốn xóa chi tiêu</p>
            <button>Đồng ý</button>
        </div>
    </div>
    <!-- END XOA -->

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
                <th>Thao tác</th>
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
                    <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                        <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>

<script>
    function momodal() {
        document.getElementById("nenmodal-1").classList.toggle("active");
    }

    function momodal2() {
        document.getElementById("nenmodal-2").classList.toggle("active");
    }

    function momodal3() {
        document.getElementById("nenmodal-3").classList.toggle("active");
    }
</script>