<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/qlthunhap.css">
    <link rel="stylesheet" href="../../assets/css/themsuaxoaQLTN.css">
</head>

<body>

    <!-- Header  -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-main">
                        <a class="inner-logo" href="./index.html">
                            <img src="../../assets/images/moneyManager.png" alt="Logo moneyManager">
                            <span class="inner-name">Money Manager</span>
                        </a>
                        <div class="inner-menu">
                            <ul>
                                <li><a href="quanlythunhap.php">Thu Nhập</a></li>
                                <li><a href="quanlychitieu.php">Chi Tiêu</a></li>
                                <li><a href="#">Tiết kiệm</a></li>
                                <li><a href="#">Quản Lý Ngân Sách</a></li>
                                <li><a href="#">Xem Đánh Dấu</a></li>
                                <li><a href="#">Xem Thống Kê</a></li>
                            </ul>
                        </div>
                        <div class="user">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="short-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End header  -->

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


    <!-- Footer  -->

    <footer class="footer">
        <div class="container">
            <div class="row inner-main">
                <div class="item-left col-12 col-lg-8 col-md-8 col-sm-8">
                    <ul>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Xóa tài khoản</a></li>
                    </ul>
                    <p class="item-desc">Bản quyền thuộc về Nhóm 5 lớp IT6059-001</p>
                </div>
                <div class="item-right col-12 col-lg-4 col-md-4 col-sm-4">
                    <img src="../../assets/images/footer_logo.png" alt="Logo footer">
                </div>
            </div>
        </div>
    </footer>
    <script src="../../assets/bootstrap/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
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
</body>

</html>