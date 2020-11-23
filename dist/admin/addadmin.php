<?php
require_once "../database/connect.php";
$role = 2;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    // $role = $_POST['role'];


    $query = "INSERT INTO `cuahangdienthoai`.`user` ( `name`, `password`, `Phone`,`role`) VALUES ( '$name', '$password', '$phone','$role');";
    try {
        $stmt = $pdo->query($query);
        if ($query) {
            header("location:admin.php");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

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
    <div class="container">
        <h2>ADD Admin</h2>
        <form method="post">
            <div class="form-group">
                <!-- <label for="pwd">ID product:</label> -->
                <input type="hidden" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="pwd">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="pwd">Phone:</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <!-- <label for="pwd">Role:</label> -->
                <input type="hidden" class="form-control" name="role">
            </div>
            <input class="btn btn-primary disabled" type="submit" value="ADD">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>