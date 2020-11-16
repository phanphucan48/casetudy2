<?php
include "../connect.php";
$query = "SELECT * FROM cuahangdienthoai.dangky;";
$stmt = $pdo->query($query);
$stmt = $stmt->fetchAll();
// die(var_dump($stmt));

if (isset($_POST['submit']) && $_POST['name'] != "" && $_POST['password'] && $_POST['password2' != ""]) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if ($password != $password2) {
    }
} else {
    header("location:dangky.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Thành Viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dangky.css">
</head>

<body>
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Đăng Ký Thành Viên</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ Và Tên *" name="name" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số điện thoại *" name="phone" value="" />
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mật khẩu *" name="password" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập Lại Mật Khẩu *" name="password2" value="" />
                        </div>
                    </div>
                </div>
                <button type="button" class="btnSubmit bg-success" name="button">Đăng ký</button>
                <button type="reset" class="btnSubmit">Làm Mới</button>
                </form>
            </div>
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>