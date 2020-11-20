<?php
require_once "../database/connect.php";
require_once "../database/logout.php";
require_once "../database/common.php";


if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    unset($_SESSION['id']);
    unset($_SESSION['userphone']);
}

$login = new Login;

if (isset($_POST['submit'])) {
    if (isset($_POST['userName']) && isset($_POST['password'])) {
        $myUserName =   $_POST['userName'];
        $myPassword =  $_POST['password'];
        $login = $login->getAll();

        if ($myUserName != "" && $myPassword != "") {
            foreach ($login as $value) {

                if ($value['name'] === $myUserName && $value['password'] === $myPassword) {
                    // die(var_dump($value['role']));
                    if ($value['role'] == 2) {
                        $_SESSION['user'] = $value['name'];
                        header('location:../Dashboard.php');
                    } else {
                        header('location:../index.php');
                        $_SESSION['id'] = $value['id'];
                        $_SESSION['user'] = $value['name'];
                        $_SESSION['userphone'] = $value['Phone'];
                    }
                }
            }
        } else {
            $messenger = "không được để trống";
        }
    }
}


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication " class="image">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 thongbaoloi">


                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Đăng Nhập</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">UserName</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="text" name="userName" placeholder="User Name..." />
                                            <?php
                                            if (isset($messenger)) {
                                                echo "<p class='text-danger'>" . $messenger . " </p>";
                                            }
                                            ?>

                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password...</label>

                                            <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="password" />
                                            <?php
                                            if (isset($messenger)) {
                                                echo "<p class='text-danger'>" . $messenger . " </p>";
                                            }
                                            ?>
                                        </div>


                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                                            <!-- <a class="btn btn-primary" href="Dashboard.php">Login</a> -->
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="dangky.php">Bạn cần có tài khoản? Đăng ký!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        </footer>
        <a href="../index.php" class="btn btn-danger text-white text-center" role="button"><strong>Về Trang Chủ</strong> </a>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>