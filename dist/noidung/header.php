<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>

    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-light;">

            <div class="container ">
                <div class="heder__logo">
                    <img src="../imge/Logo.jpg" alt="">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link  btn btn-outline-warning font-weight-bold text-light active " href="#"><i class="fas fa-home text-light"></i>Trang chủ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light btn btn-outline-warning font-weight-bold" href="action/sanpham.php"><i class="fas fa-mobile-alt text-light"></i>Sản Phẩm</a>
                        </li>
                        <!-- <li class="nav-item">
    <a class="nav-link text-light btn btn-outline-warning font-weight-bold" href="#"><i class="fa fa-hands-helping text-light"></i>Trợ Giúp</a>
  </li> -->
                        <?php
                        if (isset($_SESSION['user'])) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light btn btn-outline-warning font-weight-bold" href="#" id="navbarDropdown">
                                    <i class="fas fa-user-lock text-light "></i> <?php echo $_SESSION['user']; ?>
                                </a>
                                <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn btn-outline-warning" href="../index.php?dangxuat=1">
                                        Đăng Xuất</a>
                                    <!-- <a class="dropdown-item btn btn-outline-warning" href="">Đăng Nhập</a> -->
                                </div>
                            </li>

                        <?php } else { ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light btn btn-outline-warning font-weight-bold" href="#" id="navbarDropdown">
                                    <i class="fas fa-user-lock text-light "></i> Đăng Nhập
                                </a>
                                <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn btn-outline-warning" href="action/dangky.php">Đăng ký</a>
                                    <a class="dropdown-item btn btn-outline-warning" href="action/login.php">Đăng Nhập</a>
                                </div>
                            </li>
                        <?php  } ?>

                        <li class="nav-item">
                            <a class="nav-link  a-nava font-weight-bold text-light btn btn-outline-warning" href="../giohang/showgiohang.php"><i class="fa fa-cart-plus text-light"></i>
                                <span class="badge badge-danger">
                                    <?php if (isset($_SESSION['cart'])) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo "0";
                                    };
                                    // unset($_SESSION['quantity']);
                                    ?>
                                </span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="../action/search.php" method="POST">

                        <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Bạn muốn tìm.." aria-label="Search">
                        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Tìm Kiếm"></input>
                        <!-- <input type="hidden" name="timkiem" value="Tìm-kiếm"> -->
                    </form>
                </div>
            </div>


        </nav>
    </div>

</body>

</html>