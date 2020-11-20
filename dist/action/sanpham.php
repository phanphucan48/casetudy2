<?php
require_once "../database/product.php";
require_once "../database/common.php";

$sanpham = new Product;
$sanpham = $sanpham->getAll();
// die(var_dump($sanpham));

?>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-dark">
        <a class="navbar-brand btn btn-danger" href="../index.php">Trở Lại</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link   text-light " href="iphone.php">
                        <!-- <strong>Iphone</strong> -->
                        <img src="//cdn.tgdd.vn/Brand/1/iPhone-(Apple)42-b_52.jpg" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-light" href="samsung.php">
                        <!-- <strong>Samsung</strong> -->
                        <img src="//cdn.tgdd.vn/Brand/1/Samsung42-b_25.jpg" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-light" href="oppo.php">
                        <!-- <strong>Oppo</strong> -->
                        <img src="//cdn.tgdd.vn/Brand/1/OPPO42-b_27.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">

        <div class="row">
            <div class="row">
                <?php foreach ($sanpham as $product) : ?>
                    <div class="col-md-3 col-ms-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top img-product" src="<?= $product['ImgProduct']  ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['ProductName'] ?><span class="badge badge-secondary badge-danger">New</span></h5>
                                <p class="card-text text-danger"><?= number_format($product['price']) ?> Đ</p>
                                <form action="showproduct.php" method="post">
                                    <input type="hidden" name="id" value="<?= $product['idProduct'] ?>">

                                    <button class="btn btn-outline-success "><strong>Mua Ngay</strong> </button>
                                </form>
                                <!-- <a href="product/showproduct.php" class="btn btn-primary">Mua Ngay</a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center " style="margin-bottom:0">
        <footer class="page-footer font-small indigo bg-warning">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->


                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-dark">Lịch Sử Mua Hàng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Tìm Hiểu Về Mua Trả Góp</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Chính Sách Bảo Hành</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Chính Sách Đổi Trả</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->


                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-dark">Giới Thiệu Công Ty</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Tuyển Dụng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Gửi Góp Ý,Khiếu Nại</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Tìm Siêu Thị</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->


                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-dark">Gọi Mua Hàng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Gọi Khiếu Nại</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Gọi Bảo Hành</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Kỹ Thuật</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-dark">Gửi Yêu Cầu Trợ Giúp</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Hướng Dẫn Đặt Hàng</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Báo Lỗi Bảo Mật</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Điều Khoản Sử Dụng</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 bg- bg-dark">© 2020 Cửa Hàng Điện Thoại:
                <a href="https://mdbootstrap.com/"> DienThoai.com</a>
            </div>
            <!-- Copyright -->

        </footer>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>