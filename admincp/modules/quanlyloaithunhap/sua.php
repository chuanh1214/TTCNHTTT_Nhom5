<div class="container">
    <h1>Danh sách loại thu nhập</h1>

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


    <!-- BANG CHI TIEU -->
    <table border="1">
        <caption align="bottom">DANH SÁCH LOẠI THU NHẬP</caption>
        <tr>
            <th>Tên khoản chi tiêu</th>
            <th>Số tiền</th>
            <th>Ghi chú</th>
            <th>Ngày</th>
            <th>Loại chi tiêu</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>Bánh gà</td>
            <td>20.000</td>
            <td></td>
            <td>1/6/2023</td>
            <td>Đồ ăn</td>
            <td><button onclick="momodal2()"><span>Sửa</span></button></td>
            <td><button onclick="momodal3()"><span>Xóa</span></button></td>
        </tr>
        <tr>
            <td>Quần áo bà ba</td>
            <td>200.000</td>
            <td>Tặng bà</td>
            <td>1/6/2023</td>
            <td>Quần áo</td>
            <td><button onclick="momodal2()"><span>Sửa</span></button></td>
            <td><button onclick="momodal3()"><span>Xóa</span></button></td>
        </tr>
        <tr>
            <td>Tiền điện tháng 5</td>
            <td>400.000</td>
            <td></td>
            <td>7/6/2023</td>
            <td>Tiền điện</td>
            <td><button onclick="momodal2()"><span>Sửa</span></button></td>
            <td><button onclick="momodal3()"><span>Xóa</span></button></td>
        </tr>
        <tr>
            <td>Mua trà sữa</td>
            <td>30.000</td>
            <td></td>
            <td>7/6/2023</td>
            <td>Đồ uống</td>
            <td><button onclick="momodal2()"><span>Sửa</span></button></td>
            <td><button onclick="momodal3()"><span>Xóa</span></button></td>
        </tr>
        <tr>
            <td>Đi du lịch</td>
            <td>1.500.000</td>
            <td>Hạ Long</td>
            <td>8/6/2023</td>
            <td>Du lịch</td>
            <td><button onclick="momodal2()"><span>Sửa</span></button></td>
            <td><button onclick="momodal3()"><span>Xóa</span></button></td>
        </tr>
        <tr>
            <td>Nhét lợn</td>
            <td>100.000</td>
            <td></td>
            <td>8/6/2023</td>
            <td>Tiết kiệm</td>
            <td><button onclick="momodal2()"><span>Sửa</span></button></td>
            <td><button onclick="momodal3()"><span>Xóa</span></button></td>
        </tr>
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