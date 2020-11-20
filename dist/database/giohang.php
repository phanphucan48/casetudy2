<?php
require_once "connect.php";
require_once "common.php";
require_once "product.php";
// session_destroy();

$idpro = !empty($_GET['idpro']) ? (int)$_GET['idpro'] : 0;
$quantity = !empty($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
$action = !empty($_GET['action']) ? (int)$_GET['action'] : 'add';




$product = new Product;

$product = $product->getById($idpro);




if ($product && $action == 'add') {



    if (isset($_SESSION['cart'][$idpro])) {
        $_SESSION['cart'][$idpro]['quantity'] += $quantity;
    } else {
        $item = [
            'idProduct' => $product['idProduct'],
            'name' => $product['ProductName'],
            'price' => $product['price'],
            'ImgProduct' => $product['ImgProduct'],
            'quantity' => $quantity,
        ];

        $_SESSION['cart'][$idpro] = $item;
    }
}

// $giohang = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];

if ($_SESSION['cart'] == []) {
    header('location:../giohang/carttrong.php');
}
// hành động xoá


// hành đông update


require_once '../giohang/showgiohang.php';
