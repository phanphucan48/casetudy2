<?php
require_once('../database/connect.php');
require_once('../database/common.php');
// require_once('../database/giohang.php');

$quantity = !empty($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
$action = !empty($_GET['action']) ? (int)$_GET['action'] : 'add';
// $query = "SELECT * FROM cuahangdienthoai.product ";
$tongtatca = 0;
// $id = ($_GET['id']) ? (int)$_GET['id'] : 0;
// $stmt = $pdo->query($query);
// $stmt = $stmt->fetch();


if ($action == 'update') {
    $quantity = $quantity >= 1 ? $quantity : 1;
    if (isset($_SESSION['cart'][$_GET['id']])) {
        $_SESSION['cart'][$_GET['id']]['quantity'] = $quantity;
        $_SESSION['quantity'] = $quantity;
    }
}
$product = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    if (isset($_SESSION['cart'][$delete])) {
        unset($_SESSION['cart'][$delete]);
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="panel-heading">
            <h2 class="text-primary">Thông Tin Giỏ Hàng</h2>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($product as $item) :
                            //  tạo tính giá
                            $total = $item['price'] * $item['quantity'];
                            // $tongtatca = $total;
                            // $sugatotal = $item['price'];
                            // $tongtatca = $item;
                            $tongtatca  += $total;



                        ?>
                            <tr>

                                <td class="col-sm-1 col-md-1 "><strong><?= $item['idProduct'] ?></strong></td>

                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?= $item['ImgProduct'] ?>" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#"><?= $item['name'] ?></a></h4>
                                            <!-- <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                        <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <form action="">
                                        <input type="hidden" name="id" value="<?= $item['idProduct'] ?>">
                                        <input type="hidden" name="action" value="update">
                                        <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" value="<?= $item['quantity'] ?>">
                                        <input type="submit" value="Câp nhật" class="btn btn-xs btn-success">
                                    </form>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center text-danger"><strong><?= number_format($item['price']) ?>đ</strong></td>
                                <td class="col-sm-1 col-md-1 text-center text-danger"><strong> <?= number_format($total) ?>đ </strong></td>
                                <td class="col-sm-2 col-md-2">
                                    <a href="?delete=<?= $item['idProduct']; ?>" class="btn btn-sm btn-danger">Delete</a>

                                    </button></td>
                            </tr>

                        <?php
                            $n++;
                        endforeach; ?>
                        <tr>
                            <td>
                                <h3>Total</h3>
                            </td>
                            <td class="text-right">


                                <h2 class="text-danger"><strong><?= number_format($tongtatca) ?>đ</strong></h2>
                                <?php $_SESSION['tongtatca'] = $tongtatca ?>
                            </td>
                            <td></td>
                            <td></td>

                        </tr>

                    </tbody>
                    <tr>
                        <td>
                            <a href="../index.php" class="btn btn-sm btn-danger">Trở về</a>

                        </td>
                        <td>
                            <a href="../thanhtoan.php" class="btn btn-sm btn-success">Thanh toán</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
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
</div>

</html>