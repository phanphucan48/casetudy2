<?php
require_once "../database/dangky.php";
require_once "../database/common.php";

$role = 1;

$dangkyDB = new DangkyDB;

if (isset($_POST["submit"])) {

    if ($_POST["name"] != '' && $_POST["password"] != '' && $_POST['password2'] != '' && $_POST['phone'] != '') {
        //  thực hiện nếu người dùng điền đầy đủ thông tin 

        $name = $_POST['name'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $phone = $_POST['phone'];
        if ((strlen($name) < 6 or strlen($password) < 6)) {
            $messenger = " Phải nhiều hơn 6 ký tự";
        } else {

            $dangky = $dangkyDB->getByName($name);
            if ($dangky) {
                $messenger = "tài khoản đã tồn tại";
                // die(var_dump("$messenger"));
            } else {
                $dangky = $dangkyDB->insert($role, $name, $password, $phone);
                if ($password != $password2) {
                    $errorPass = "Mật khẩu không trùng nhau";
                    // die(var_dump($password . '+' . $password2));
                } else {
                    // $messenger = "Đã đăng ký thành công";
                    $_SESSION['dangky'] = 'CHÚC MỪNG ĐÃ ĐĂNG KÝ THÀNH CÔNG';
                    header('location:../index.php');
                }
            }
        }
    } else {
        $messenger = "không được để trống";
    }
}




?>

<!DOCTYPE html>
<html lang="en" class="dangky">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Thành Viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dangky.css">
</head>

<body>
    <div class="jumbotron jumbotron-fluid dangky">
        <div class="container register-form ">
            <div class="form mt-5">
                <div class="note">
                    <p>Đăng Ký Thành Viên</p>
                </div>

                <div class="form-content bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Họ Và Tên *" name="name" value="" />
                                    <?php
                                    if (isset($messenger)) {
                                        echo "<p class='text-danger'>" . $messenger . " </p>";
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại *" name="phone" value="" />
                                    <?php
                                    if (isset($messenger)) {
                                        echo "<p class='text-danger'>" . $messenger . " </p>";
                                    }
                                    ?>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="password" class="form-control" placeholder="Mật khẩu *" name="password" value="" />
                                <?php
                                if (isset($messenger)) {
                                    echo "<p class='text-danger'>" . $messenger . " </p>";
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <!-- <input type="number" class="form-control" name="role" value="1"> -->


                                <input type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu *" name="password2" value="" />
                                <?php
                                if (isset($errorPass)) {
                                    echo "<p class='text-danger'>" . $errorPass . " </p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit bg-success outline" name="submit">Đăng ký</button>
                    <button type="reset" class="btnSubmit">Làm Mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>