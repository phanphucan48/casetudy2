<?php
require_once "../database/connect.php";
require_once "../database/product.php";
require_once "../database/common.php";



//  tạo session cart





if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $product = new Product;
    $product = $product->getById($id);
    // die(var_dump($product));
}


// $product = new Product;





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
    <?php require_once "../noidung/header.php"; ?>

    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="item-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <img width="100%" id="item-display" src="<?= $product['ImgProduct'] ?>" alt=""></img>

                        </div>
                        <div class="col-md-6 d-flex flex-column align-items-left">
                            <div class="product-title"><strong>
                                    <h1><?= $product['ProductName'] ?></h1>
                                </strong> </div>
                            <div class="product-desc"></div>
                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                            <hr>
                            <div class="product-price text-danger">
                                <h2><?= number_format($product['price']) ?>Đ </h2>
                            </div>
                            <div class="product-stock">In Stock</div>
                            <hr>
                            <div class="btn-group cart">
                                <a class="btn btn btn-info bg-primary " href="../database/giohang.php?idpro=<?= $product['idProduct']; ?>">Thêm Vào Giỏ Hàng</a>
                            </div>
                            <div class="btn-group wishlist">
                                <a href="../index.php" class="btn btn-info bg-danger">Trở Lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="jumbotron text-center " style="margin-bottom:0">
            <?php require_once "../noidung/footer.php" ?>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>