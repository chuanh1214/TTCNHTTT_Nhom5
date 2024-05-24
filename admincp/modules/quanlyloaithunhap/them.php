<?php
$sql_lietke_loaitn = "SELECT * FROM loaithunhap";
$query_lietke_loaitn = mysqli_query($mysqli, $sql_lietke_loaitn);
?>
<div class="container">
    <h1>Danh sách loại thu nhập</h1>
    <!-- THEM -->
    <button onclick="momodal()"><span>Thêm</span></button>
    <div class="nenmodal" id="nenmodal-1">
        <div class="nenmodal2"></div>
        <div class="ndmodal">
            <div class="closemodal"><button onclick="momodal()">×</button></div>
            <div class="titlemodal">Thêm loại thu nhập mới</div>
            <div class="container1">
                <div class="row">
                    <div class="col-12">
                        <div class="form">
                            <form action="modules/quanlyloaithunhap/xuly.php" method="post">
                                <div class="form-child">
                                    <label for="text">Tên loại thu nhập</label>
                                    <input type="text" name="tenloaitn">
                                </div>
                                <div class="form-child">
                                    <button type="submit" name="themloaithunhap">Thêm</button>
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
            <div class="titlemodal">Sửa loại thu nhập </div>
            <div class="container1">
                <div class="row">
                    <div class="col-12">
                        <div class="form">
                            <form action="https://www.w3schools.com/action_page.php" target="_blank">
                                <div class="form-child">
                                    <label for="text">Tên loại thu nhập</label>
                                    <input type="text" name="full_name">
                                </div>

                                <div class="form-child">
                                    <button type="submit" name="sualoaithunhap">Cập Nhật</button>
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
            <div class="titlemodal">Xóa loại thu nhập </div>
            <p>Xác nhận muốn xóa loại thu nhập</p>
            <input type="hidden" name="maloaithunhap" value="<?php echo $row['maLoaiTN']; ?>" />
            <button type="submit" name="xoaloaithunhap">Đồng ý</button>
        </div>
    </div>
    <!-- END XOA -->
    <!-- BANG CHI TIEU -->
    <table border="1">
        <caption align="bottom">DANH SÁCH LOẠI THU NHẬP</caption>
        <tr>
            <th>Id</th>
            <th>Tên loại thu nhập</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_loaitn)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tenLoaiTN'] ?></td>
                <td><button onclick="momodal2()"><span>Sửa</span></button></td>
                <td><button onclick="momodal3()"><span>Xóa</span></button></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<script src="../../assets/bootstrap/bootstrap.bundle.min.js">
</script>
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