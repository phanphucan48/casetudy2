<?php
session_start();
$idpro = !empty($_GET['idpro']) ? (int)$_GET['idpro'] : 0;
$quantity = !empty($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
$action = !empty($_GET['action']) ? (int)$_GET['action'] : 'add';

$id = ($_GET['id']) ? (int)$_GET['id'] : 0;

// session_destroy();

//  tạo session
include "./connect.php";
$query = "SELECT * FROM cuahangdienthoai.product WHERE  idProduct=$idpro;";

$stmt = $pdo->query($query);
$stmt = $stmt->fetch();
// die(var_dump($stmt));

if ($stmt && $action == 'add') {


    if (isset($_SESSION['cart'][$idpro])) {
        $_SESSION['cart'][$idpro]['quantity'] += $quantity;
    } else {
        $item = [
            'idProduct' => $stmt['idProduct'],
            'name' => $stmt['ProductName'],
            'price' => $stmt['price'],
            'ImgProduct' => $stmt['ImgProduct'],
            'quantity' => $quantity,
        ];

        $_SESSION['cart'][$idpro] = $item;
    }
}

// $giohang = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];

// hành động xoá


// hành đông update
if ($action == 'update') {
    $quantity = $quantity >= 1 ? $quantity : 1;
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }
}
// hành đông deleta
// if (isset($_GET['delete'])) {
//     $delete =  $stmt['idProduct'];
//     if (isset($_SESSION['cart'][$delete])) {
//         unset($_SESSION['cart'][$delete]);
//     }
// }
// if (isset($_GET['delete'])) {
//     $delete = $_GET['delete'];
//     if ($_SESSION['cart'][$delete]) {
//         unset($_SESSION['cart'][$delete]);
//     } else if ($_SESSION['cart'] == []) {
//         header('location:./carttrong.php');
//     }
// }

header('location:showgiohang.php');
// die(var_dump($_SESSION['cart']));
