<?php
$maNguoiDung = $_SESSION['dangky'];
$sql_show_list = mysqli_query($mysqli, "SELECT * from thunhap where maNguoiDung = '" . $maNguoiDung . "'");
$sql_thu_nhap = mysqli_query($mysqli, "SELECT * from thunhap");
$maThuNhap = "" . (mysqli_num_rows($sql_thu_nhap) + 1);

//Thêm khoản thu nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addTN'])) {
        $tenKhoanThu = $_POST['tenKhoanThu'];
        $soTien = $_POST['soTien'];
        $ghiChu = $_POST['ghiChu'];
        $ngay = $_POST['ngay'];
        $maLoaiTN = $_POST['loaiTN'];
        $sql_addTN = mysqli_query($mysqli, "INSERT into thunhap values('" . $maThuNhap . "','" . $tenKhoanThu . "','" . $soTien . "','" . $ghiChu . "','" . $ngay . "','" . $maLoaiTN . "','" . $maNguoiDung . "')");
        header("Location: index.php?quanly=quanlythunhap");
    } elseif (isset($_POST['suathunhap'])) {
        $maThuNhap = $_GET['id'];
        echo $maThuNhap;
        $sql_CT_old = mysqli_query($mysqli, "SELECT * from thunhap where maThuNhap = '" . $maThuNhap . "' LIMIT 1");
        $dong = mysqli_fetch_array($sql_CT_old);
        if (isset($_POST['updateTN'])) {
            $tenKhoanThu = $_POST['tenKhoanThu'];
            $soTien = $_POST['soTien'];
            $ghiChu = $_POST['ghiChu'];
            $ngay = $_POST['ngay'];
            $maLoaiTN = $_POST['loaiTN'];
            $sql_updateCT = mysqli_query($mysqli, "UPDATE thunhap set tenKhoanThu ='" . $tenKhoanThu . "', soTien = '" . $soTien . "', ghiChu = '" . $ghiChu . "', ngay = '" . $ngay . "', maLoaiTN = '" . $maLoaiTN . "' where maThuNhap = '" . $maThuNhap . "'");
            header("Location: index.php?quanly=quanlythunhap");
        }
    } else {
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM thunhap WHERE maThuNhap = '" . $id . "'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: index.php?quanly=quanlythunhap');
    }
}
?>
<!-- BODY Quan ly chi tieu -->
<div class="container">
    <h1 class="pt-5">Danh sách thu nhập</h1>
    <!-- THEM -->
    <button onclick="momodal()"><span>Thêm</span></button>
    <div class="nenmodal" id="nenmodal-1">
        <div class="nenmodal2"></div>
        <div class="ndmodal">
            <div class="closemodal"><button onclick="momodal()">×</button></div>
            <div class="titlemodal">Thêm khoản thu nhập mới</div>
            <div class="container1">
                <div class="row">
                    <div class="col-12">
                        <div class="form">
                            <form action="" method="post">
                                <div class="form-child">
                                    <label for="text">Tên khoản thu nhập</label>
                                    <input type="text" name="tenKhoanThu">
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
                                    <button type="submit" name="addTN">Thêm</button>
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
            <div class="titlemodal">Sửa khoản thu nhập </div>
            <div class="container1">
                <div class="row">
                    <div class="col-12">
                        <div class="form">
                            <form action="" method="post">

                                <div class="form-child">
                                    <label for="text">Tên khoản thu nhập</label>
                                    <input type="text" value="<?php echo $dong['tenLoaiTN'] ?>" name="tenKhoanThu">
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
                                    <label for="text">Loại thu nhập</label>
                                    <select name="loaiTN" required>
                                        <?php
                                        $sql_LoaiTN = mysqli_query($mysqli, "SELECT * from loaithunhap");
                                        if (mysqli_num_rows($sql_LoaiTN) == 0) {
                                            echo '<option value="rỗng"></option>';
                                        } else {
                                            while ($row = mysqli_fetch_array($sql_LoaiTN)) {
                                                echo '<option value="' . $row["maLoaiTN"] . '">' . $row["tenLoaiTN"] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-child">
                                    <button type="submit" name="updateTN">Cập Nhật</button>
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
            <div class="titlemodal">Xóa khoản thu nhập </div>
            <p>Xác nhận muốn xóa thu nhập</p>
            <button name="xoathunhap">Đồng ý</button>
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
                <th>Tên khoản thu nhập</th>
                <th>Số tiền</th>
                <th>Ghi chú</th>
                <th>Ngày</th>
                <th>Loại thu nhập</th>
                <th colspan="2">Thao tác</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($sql_show_list)) {

            ?>
                <tr>
                    <td><?php echo $row['tenKhoanThu'] ?></td>
                    <td><?php echo $row['soTien'] ?></td>
                    <td><?php echo $row['ghiChu'] ?></td>
                    <td><?php echo $row['ngay'] ?></td>
                    <td><?php
                        $sql_LoaiTN = mysqli_query($mysqli, "SELECT * from loaithunhap where maLoaiTN = '" . $row['maLoaiTN'] . "'");
                        $loaithunhap = mysqli_fetch_array($sql_LoaiTN);
                        echo $loaithunhap['tenLoaiTN'] ?></td>
                    <td><a href="#index.php?quanly=quanlythunhap&thisID=<?php echo $row['maThuNhap'] ?>" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                        <a href="#>" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
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