<?php
require_once "../database/connect.php";
$query = "SELECT * FROM cuahangdienthoai.oder;";
$stmt = $pdo->query($query);
$result = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Đơn Đặt Hàng
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID oder</th>
                            <th>Oder Date</th>
                            <th>ID user</th>
                            <th>Phone</th>
                            <th>Đia Chỉ</th>
                            <th>quantity</th>
                            <th>ngaygiao</th>
                            <th>idproduct</th>


                        </tr>
                    </thead>
                    <!-- <img src="" alt=""> -->
                    <tbody>
                        <?php foreach ($result as $product) : ?>
                            <tr>

                                <td><?= $product['id'] ?></td>
                                <td><?= $product['OderDate'] ?></td>

                                <td><?= $product['IDuser'] ?></td>
                                <td><?= $product['phone'] ?></td>
                                <td><?= $product['diachi'] ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td><?= $product['ngaygiao'] ?></td>
                                <td><?= $product['idproduct'] ?></td>
                                <!-- <td>
                                    <a class="btn btn-info" href="editproduct.php?idEdit=<?= $product['idProduct']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="Dashboard.php?idDelete=<?= $product['idProduct']; ?>">Delete</a>
                                </td> -->

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <a href="addproduct.php" class="btn btn-info" role="button">ADD</a> -->
            </div>
        </div>
    </div>
    </div>
    </main>
    <footer class="py-4 bg-light mt-auto">

    </footer>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>