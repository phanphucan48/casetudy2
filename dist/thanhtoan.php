<?php
require_once("database/connect.php");
require_once("database/common.php");

// $query = "SELECT * FROM cuahangdienthoai.oder;";
// $stmt = $pdo->query($query);
// $stmt = $stmt->fetchAll();
// die(var_dump($stmt));
if (!isset($_SESSION['user'])) {
    header('location: ../action/login.php');
} else {
    $phone = $_SESSION['userphone'];
    $name = $_SESSION['user'];
}
$mesenger = null;
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($cart as $product) {

            $product_img = $product['ImgProduct'];
            $product_id = $product['idProduct'];
            $user_id = $_SESSION['id'];
            $date_order = date("Y-m-d");
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $quantity = $_SESSION['quantity'];
            $ngaygiao = $_POST['day'];
            // die(var_dump($ngaygiao));
            $query = "INSERT INTO `cuahangdienthoai`.`oder` (`idproduct`, `OderDate`, `IDuser`, `phone`, `diachi`, `quantity`, `ngaygiao`)
             VALUES ('$product_id', '$date_order', '$user_id', '$phone', '$address', '$quantity', '$ngaygiao');";
            $stmt = $pdo->query($query);

            // $stmt = $stmt->fetch();
            // die(var_dump($stmt));
            $mesenger = "Đã đặt hàng thành công";
            // die(var_dump($stmt));
        }
        unset($_SESSION['cart']);
    }
}


// if (isset($_POST['submit'])) {

//     // unset($_SESSION['quantity']);
// }
// if (isset($cart)) {
//     unset($cart);
// }

// die();
// if (isset($_POST['submit'])) {
//     die(var_dump('aaaaa'));
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="thanhtoan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<style>
    .thanhtoan {
        background-image: linear-gradient(to right, #f94423, #f83600);
    }
</style>

<body>
    <div class="jumbotron jumbotron-fluid thanhtoan">
        <h2 class="text-center"><i class="fas fa-cash-register text-center" style="color:white;">Thanh Toán </i></h2>

        <div class="alert alert-primary text-center text-success" role="alert">
            <strong><?= $mesenger ?? '' ?></strong>
        </div>



        <div class="row">

            <div class="col-75">

                <div class="container">

                    <div class="row">
                        <div class="col-50">
                            <form action="./thanhtoan.php" method="POST">
                                <h3> <i class="fas fa-money-bill" style="color:green"></i>Hoá Đơn</h3>
                                <label for="fname"><i class="fa fa-user"></i> HỌ VÀ TÊN</label>
                                <input type="text" id="fname" name="name" value="<?php echo $name ?>">
                                <label for="email"><i class="fas fa-phone"></i> PHONE</label>
                                <input type="text" id="email" name="phone" value="<?php echo $phone ?>">
                                <label for="adr"><i class="far fa-address-book"></i> ĐỊA CHỈ</label>
                                <input type="text" id="adr" name="address" placeholder="Địa chỉ.." required>
                                <label for="adr"><i class="far fa-address-book"></i> NGÀY GIAO HÀNG</label>
                                <input type="date" id="adr" name="day" placeholder="Ngày đặt hàng..">
                                <!-- <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York"> -->
                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">Cách thức thanh toán</label>
                                        <div class="icon-container">
                                            <i class="fab fa-cc-visa" style="color:navy;"></i>
                                            <i class="fab fa-cc-amex" style="color:blue;"></i>
                                            <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                            <i class="fab fa-cc-discover" style="color:orange;"></i>
                                        </div>
                                        <!-- <input type="text" id="state" name="state" placeholder="NY"> -->
                                    </div>
                                </div>
                                <input type="submit" value="Đặt Hàng" class="btn">
                                <a href="index.php" class="btn btn-sm bg-danger">Trở về</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-25">
                <div class="container">

                    <h4>Giỏ Hàng
                        <span class="price" style="color:black">
                            <!-- <i class="fa fa-shopping-cart"></i>  -->
                            Sản phẩm
                            <h6 class="bg-danger text-center">
                                <strong>
                                    <?php
                                    if ((isset($_SESSION['cart']))) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo "0";
                                    };
                                    ?>
                                </strong>

                            </h6>
                        </span>
                    </h4>

                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $cartproduct) : ?>

                            <p> Tên :<a href="#"><?php echo $cartproduct['name']; ?></a> </p>
                            <p> Giá :<a href="#" class="text-danger"><?php echo $cartproduct['price']; ?> Đ</a></p>
                            <p> Số Lượng :<a href="#"><?php echo $cartproduct['quantity']; ?></a></p>
                            <p>------------------------</p>
                            <p> <img src="<?= $cartproduct['ImgProduct']  ?>  "></p>

                        <?php endforeach;
                        ?>

                        <hr>
                        <p>Total <span class=" price" style="color:black"><b><?php echo number_format($_SESSION['tongtatca']); ?>Đ</b></span></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <script>
        toastr.success('Have fun storming the castle!', 'Miracle Max Says')
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>