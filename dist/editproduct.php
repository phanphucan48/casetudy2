<?php
include "./connect.php";
// include "./Dashboard.php";
$idEdit = $_GET['idEdit'];
$query = "SELECT * FROM cuahangdienthoai.product WHERE idProduct = $idEdit;";
$stmt = $pdo->query($query);
$stmt = $stmt->fetch();
// die(var_dump($stmt));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt['ProductName'] = $_POST['productname'];
    $stmt['ImgProduct'] = $_POST['imgproduct'];
    $stmt['status'] = $_POST['status'];
    $stmt['SPKM'] = $_POST['SPKM'];
    $stmt['price'] = $_POST['price'];
    $stmt['date'] = $_POST['date'];
    $stmt['brank'] = $_POST['brank'];

    $query = "UPDATE `cuahangdienthoai`.`product` SET 
    `ProductName` = '" . $stmt['ProductName'] . "', 
    `ImgProduct` = '" . $stmt['ImgProduct'] . "', 
    `status` = '" . $stmt['status'] . "',
    `SPKM` = '" . $stmt['SPKM'] . "', 
    `price` = '" . $stmt['price'] . "',
    `date` = '" . $stmt['date'] . "',
    `brank` = '" . $stmt['brank'] . "' WHERE (`idProduct` = '$idEdit')
    ";

    // die(var_dump($stmt['price']));
    $stmt = $pdo->query($query);
    if ($query) {
        header("location:./Dashboard.php ");
    }

    // die(var_dump($stmt));
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>Edit Products</h2>
        <form method="post">
            <div class="form-group">
                <!-- <label for="pwd">ID product:</label> -->
                <input type="hidden" class="form-control" name="id" value="<?= $idEdit; ?>">
            </div>
            <div class="form-group">
                <label for="pwd">ProductName:</label>
                <input type="text" class="form-control" name="productname" value="<?= $stmt['ProductName'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">ImgProduct:</label>
                <input type="text" class="form-control" name="imgproduct" value="<?= $stmt['ImgProduct'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">status:</label>
                <input type="text" class="form-control" name="status" value="<?= $stmt['status'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">SảnPhamKM:</label>
                <input type="text" class="form-control" name="SPKM" value="<?= $stmt['SPKM'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">GiaHienTai:</label>
                <input type="text" class="form-control" name="price" value="<?= $stmt['price'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">NgayDang:</label>
                <input type="text" class="form-control" name="date" value="<?= $stmt['date'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">HangSX:</label>
                <input type="text" class="form-control" name="brank" value="<?= $stmt['brank'] ?>">
            </div>




            <input class="btn btn-primary disabled" type="submit" value="UPDATE">
        </form>
    </div>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>