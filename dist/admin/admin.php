<?php
require_once "../database/connect.php";
require_once "../database/common.php";

$query = "SELECT * FROM cuahangdienthoai.user where role='2';";
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
            Admin
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Role</th>



                        </tr>
                    </thead>
                    <!-- <img src="" alt=""> -->
                    <tbody>
                        <?php foreach ($result as $product) : ?>
                            <tr>

                                <td><?= $product['id'] ?></td>
                                <td><?= $product['name'] ?></td>

                                <td><?= $product['password'] ?></td>
                                <td><?= $product['Phone'] ?></td>

                                <td><?= $product['role'] ?></td>
                                <!--  -->
                                <!-- <td>
                                    <a class="btn btn-info" href="editproduct.php?idEdit=<?= $product['idProduct']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="Dashboard.php?idDelete=<?= $product['idProduct']; ?>">Delete</a>
                                </td> -->

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="addadmin.php" class="btn btn-info" role="button">ADD</a>
            </div>
        </div>
    </div>
    </div>
    </main>
    <footer class="py-4 bg-light mt-auto">

    </footer>
    </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>