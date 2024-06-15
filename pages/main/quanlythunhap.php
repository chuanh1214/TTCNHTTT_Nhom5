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
                                <form action="https://www.w3schools.com/action_page.php" target="_blank">
                                    <div class="form-child">
                                        <label for="text">Tên khoản thu nhập</label>
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
                <div class="titlemodal">Sửa khoản thu nhập </div>
                <div class="container1">
                    <div class="row">
                        <div class="col-12">
                            <div class="form">
                                <form action="https://www.w3schools.com/action_page.php" target="_blank">
                                    <div class="form-child">
                                        <label for="text">Tên khoản thu nhập</label>
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
                <div class="titlemodal">Xóa khoản thu nhập </div>
                <p>Xác nhận muốn xóa thu nhập</p>
                <button>Đồng ý</button>
            </div>
        </div>
        <!-- END XOA -->

        <!-- BANG CHI TIEU -->
        <table border="1">
            <tr>
                <th>Tên khoản thu nhập</th>
                <th>Số tiền</th>
                <th>Ghi chú</th>
                <th>Ngày</th>
                <th>Loại thu nhập</th>
                <th>Thao tác</th>
            </tr>
            <tr>
                <td>Lương</td>
                <td>20.000.000</td>
                <td></td>
                <td>1/6/2023</td>
                <td>Thu nhập chính</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Chứng khoán</td>
                <td>10.000.000</td>
                <td>Đầu tư</td>
                <td>1/6/2023</td>
                <td>Thu nhập thêm</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Kinh doanh</td>
                <td>40.000.000</td>
                <td></td>
                <td>7/6/2023</td>
                <td>Thu nhập chính</td>
                <td><a href="#" onclick="momodal2()" class="btn btn-success" name="suathunhap">Sửa</a>
                    <a href="#" onclick="momodal3()" class="btn btn-danger" name="xoathunhap" onclick="confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>Bán lại đồ cũ</td>
                <td>30.000</td>
                <td></td>
                <td>7/6/2023</td>
                <td>Thu nhập thêm</td>
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