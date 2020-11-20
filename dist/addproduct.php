<?php
require_once "database/connect.php";
// include "./Dashboard.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productname = $_POST['productname'];
    $imgproduct = $_POST['imgproduct'];
    $status = $_POST['status'];
    $SPKM = $_POST['SPKM'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $brank = $_POST['brank'];
    $idbrank = $_POST['idbrank'];
    $query = "INSERT INTO `cuahangdienthoai`.`product` (`ProductName`, `ImgProduct`, `status`, `SPKM`, `price`, `date`, `brank`,`idbrank`)
     VALUES ( '$productname', '$imgproduct', '$status', '$SPKM', '$price', '$date', '$brank', '$idbrank');";
    try {
        $stmt = $pdo->query($query);
        if ($query) {
            header("location:./Dashboard.php ");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


// $stmt = $pdo->query($query);
// die(var_dump($query));





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
        <h2>ADD Products</h2>
        <form method="post">
            <div class="form-group">
                <!-- <label for="pwd">ID product:</label> -->
                <input type="hidden" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="pwd">ProductName:</label>
                <input type="text" class="form-control" name="productname">
            </div>
            <div class="form-group">
                <label for="pwd">ImgProduct:</label>
                <input type="text" class="form-control" name="imgproduct">
            </div>
            <div class="form-group">
                <label for="pwd">status:</label>
                <input type="text" class="form-control" name="status">
            </div>
            <div class="form-group">
                <label for="pwd">SảnPhamKM:</label>
                <input type="text" class="form-control" name="SPKM">
            </div>
            <div class="form-group">
                <label for="pwd">GiaHienTai:</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="pwd">NgayDang:</label>
                <input type="text" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label for="pwd">HangSX:</label>
                <input type="text" class="form-control" name="brank">
            </div>
            <div class="form-group">
                <label for="pwd">idbanrk:</label>
                <input type="text" class="form-control" name="idbrank">
            </div>




            <input class="btn btn-primary disabled" type="submit" value="ADD">
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