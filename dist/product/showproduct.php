<?php
include "../connect.php";
session_start();
// $query = "SELECT * FROM cuahangdienthoai.product;";

// die(var_dump($stmt));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // die(var_dump($_POST['id']));
    $id = $_POST['id'];
    $query = "SELECT * FROM cuahangdienthoai.product where idProduct = $id ;";
    $stmt = $pdo->query($query);
    $stmt = $stmt->fetch();
    // die(var_dump($stmt['ImgProduct']));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="product.css">
    <style></style>
</head>

<body>
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="item-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <img width="100%" id="item-display" src="<?= $stmt['ImgProduct'] ?>" alt=""></img>

                        </div>
                        <div class="col-md-6 d-flex flex-column align-items-left">
                            <div class="product-title"><strong><?= $stmt['ProductName'] ?></strong> </div>
                            <div class="product-desc"></div>
                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                            <hr>
                            <div class="product-price text-danger"><?= number_format($stmt['price']) ?> Đ</div>
                            <div class="product-stock">In Stock</div>
                            <hr>
                            <div class="btn-group cart">
                                <a class="btn btn btn-info bg-primary " href="../giohang.php?idpro=<?= $stmt['idProduct']; ?>">Add Cart</a>
                            </div>
                            <div class="btn-group wishlist">
                                <a href="../index.php" class="btn btn-info bg-danger">Trở Lại</a>
                            </div>
                        </div>
                    </div>
                </div>
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



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>