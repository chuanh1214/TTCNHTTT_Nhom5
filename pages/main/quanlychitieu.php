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
                                <form action="https://www.w3schools.com/action_page.php" target="_blank">
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
                                        <button type="submit">Thêm</button>
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
                                <form action="https://www.w3schools.com/action_page.php" target="_blank">
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
            <tr>
                <th>Tên khoản chi tiêu</th>
                <th>Số tiền</th>
                <th>Ghi chú</th>
                <th>Ngày</th>
                <th>Loại chi tiêu</th>
                <th>Thao tác</th>
            </tr>
            <tr>
                <td>Bánh gà</td>
                <td>20.000</td>
                <td></td>
                <td>1/6/2023</td>
                <td>Đồ ăn</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Quần áo bà ba</td>
                <td>200.000</td>
                <td>Tặng bà</td>
                <td>1/6/2023</td>
                <td>Quần áo</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Tiền điện tháng 5</td>
                <td>400.000</td>
                <td></td>
                <td>7/6/2023</td>
                <td>Tiền điện</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Mua trà sữa</td>
                <td>30.000</td>
                <td></td>
                <td>7/6/2023</td>
                <td>Đồ uống</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Đi du lịch</td>
                <td>1.500.000</td>
                <td>Hạ Long</td>
                <td>8/6/2023</td>
                <td>Du lịch</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Nhét lợn</td>
                <td>100.000</td>
                <td></td>
                <td>8/6/2023</td>
                <td>Tiết kiệm</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
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