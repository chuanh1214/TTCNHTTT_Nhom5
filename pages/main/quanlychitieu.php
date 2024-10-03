<?php
$maNguoiDung = $_SESSION['dangky'];
$sql_show_list = mysqli_query($mysqli, "SELECT * from chitieu where maNguoiDung = '" . $maNguoiDung . "'");
$sql_chi_tieu = mysqli_query($mysqli, "SELECT * from chitieu");
$maChiTieu = "" . (mysqli_num_rows($sql_chi_tieu) + 1);

//Thêm khoản chi tiêu


//Sửa khoản chi tiêus
// $thisID = $_GET["thisID"];
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['sua'])) {
//         $maChiTieu = $_POST['sua'];
//         $sql_CT_old = mysqli_query($mysqli, "SELECT * from chitieu where maChiTieu = '" . $maChiTieu . "'");
//         $dong = mysqli_fetch_array($sql_CT_old);
//         if ($_SERVER["REQUEST_METHOD"] == "POST") {
//             if (isset($_POST['updateCT'])) {
//                 $tenKhoanChi = $_POST['tenKhoanChi'];
//                 $soTien = $_POST['soTien'];
//                 $ghiChu = $_POST['ghiChu'];
//                 $ngay = $_POST['ngay'];
//                 $maLoaiCT = $_POST['loaiCT'];
//                 $sql_addCT = mysqli_query($mysqli, "UPDATE chitieu set tenKhoanChi ='" . $tenKhoanChi . "', soTien = '" . $soTien . "', ghiChu = '" . $ghiChu . "', ngay = '" . $ngay . "', maLoaiCT = '" . $maLoaiCT . "'");
//                 header("Location: index.php?quanly=quanlychitieu");
//             }
//         }
//     }
// }
// //Xóa khoản chi tiêu
// $sql_xoa = "DELETE FROM loaichitieu WHERE maLoaiCT = '" . $id . "'";
// mysqli_query($mysqli, $sql_xoa);
// header('Location: index.php?quanly=quanlychitieu');
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
                                    <input type="text" name="tenKhoanChi" required>
                                </div>
                                <div class="form-child">
                                    <label for="text">Số tiền</label>
                                    <input type="text" name="soTien" required>
                                </div>
                                <div class="form-child">
                                    <label for="text">Ghi chú</label>
                                    <input type="text" name="ghiChu" required>
                                </div>
                                <div class="form-child">
                                    <label for="text">Ngày</label>
                                    <input type="date" name="ngay" required>
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
                                    <input type="text" value="<?php echo $dong['tenLoaiCT'] ?>" name="tenKhoanChi" required>
                                </div>
                                <div class="form-child">
                                    <label for="text">Số tiền</label>
                                    <input type="text" value="<?php echo $dong['soTien'] ?>" name="soTien" required>
                                </div>
                                <div class="form-child">
                                    <label for="text">Ghi chú</label>
                                    <input type="text" value="<?php echo $dong['ghiChu'] ?>" name="ghiChu" required>
                                </div>
                                <div class="form-child">
                                    <label for="text">Ngày</label>
                                    <input type="date" value="<?php echo $dong['ngay'] ?>" name="ngay" required>
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
                <th colspan="2">Thao tác</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($sql_show_list)) {

            ?>
                <tr id="<?php echo $row['maChiTieu'] ?>">
                    <!-- <input type="hidden" name="maChiTieu" value="<?php echo $row['maChiTieu'] ?>"> -->
                    <!-- <td><?php echo $row['maChiTieu'] ?></td> -->
                    <td><?php echo $row['tenKhoanChi'] ?></td>
                    <td><?php echo $row['soTien'] ?></td>
                    <td><?php echo $row['ghiChu'] ?></td>
                    <td><?php echo $row['ngay'] ?></td>
                    <td><?php
                        $sql_LoaiCT = mysqli_query($mysqli, "SELECT * from loaichitieu where maLoaiCT = '" . $row['maLoaiCT'] . "'");
                        $loaichitieu = mysqli_fetch_array($sql_LoaiCT);
                        echo $loaichitieu['tenLoaiCT'] ?></td>
                    <td>
                        <a href="#index.php?quanly=quanlychitieu&thisID=<?php echo $row['maChiTieu'] ?>" onclick="momodal2()" class="btn btn-success" name="suachitieu">Sửa</a>
                    </td>

                    <td><a href="#thisID=<?php echo $row['maChiTieu'] ?>" onclick="momodal3()" class="btn btn-danger" name="xoachitieu" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>

                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addCT'])) {
        $tenKhoanChi = $_POST['tenKhoanChi'];
        $soTien = $_POST['soTien'];
        $ghiChu = $_POST['ghiChu'];
        $ngay = $_POST['ngay'];
        $maLoaiCT = $_POST['loaiCT'];
        $sql_addCT = mysqli_query($mysqli, "INSERT into chitieu values('" . $maChiTieu . "','" . $tenKhoanChi . "','" . $soTien . "','" . $ghiChu . "','" . $ngay . "','" . $maLoaiCT . "','" . $maNguoiDung . "')");
        header("Location: index.php?quanly=quanlychitieu");
    } elseif (isset($_POST['suachitieu'])) {
        $maChiTieu = $_GET['thisID'];
        echo $maChiTieu;
        $sql_CT_old = mysqli_query($mysqli, "SELECT * from chitieu where maChiTieu = '" . $maChiTieu . "' LIMIT 1");
        $dong = mysqli_fetch_array($sql_CT_old);
        if (isset($_POST['updateCT'])) {
            $tenKhoanChi = $_POST['tenKhoanChi'];
            $soTien = $_POST['soTien'];
            $ghiChu = $_POST['ghiChu'];
            $ngay = $_POST['ngay'];
            $maLoaiCT = $_POST['loaiCT'];
            $sql_updateCT = mysqli_query($mysqli, "UPDATE chitieu set tenKhoanChi ='" . $tenKhoanChi . "', soTien = '" . $soTien . "', ghiChu = '" . $ghiChu . "', ngay = '" . $ngay . "', maLoaiCT = '" . $maLoaiCT . "' where maChiTieu = '" . $maChiTieu . "'");
            header("Location: index.php?quanly=quanlychitieu");
        }
    } else {
        $id = $_GET['thisID'];
        $sql_xoa = "DELETE FROM chitieu WHERE maChiTieu = '" . $id . "'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: index.php?quanly=quanlychitieu');
    }
} ?>

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