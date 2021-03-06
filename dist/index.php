<?php
require_once "database/common.php";
require_once "database/connect.php";
require_once "database/product.php";
// require_once "action/login.php";
// if (isset($_SESSION['cart'])) {
//   echo "<pre />";
//   var_dump($_SESSION['cart']);
// }


if (isset($_GET['dangxuat'])) {
  unset($_SESSION['user']);
  unset($_SESSION['id']);
  unset($_SESSION['userphone']);
}


// session_start();
$product = new Product;

$product = $product->showProduct();
// die(var_dump($product));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

  <style>
    .carousel {
      margin-top: 6rem;
    }
  </style>
  <title>Shop</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-light">

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


  <!-- menu -->

  <!-- end menu -->

  <!-- slide -->
  <div id="carouselExampleIndicators" class="carousel slide   " data-ride="carousel">
    <?php
    // die(var_dump($_SESSION['dangky']));
    if (isset($_SESSION['dangky'])) { ?>
      <div class="alert alert-success text-center" role="alert">
        <strong><?php echo $_SESSION['dangky']; ?></strong>
      </div>
    <?php
      // xoá session 
      unset($_SESSION['dangky']);
    }
    ?>

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/note10plus-docthan-800-300-800x300.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/M51-800-300-800x300.png  " alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/smart-watch-docthan-800-300-800x300.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end slide -->
  <ul class="nav justify-content-center nav-pills nav-justified">
    <h5 class="nav-link btn btn-danger"><strong>Chọn mức giá:</strong> </h5>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-success " href="action/price1.php">Dưới 10000000đ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-success" href="action/price2.php">Từ 10000000đ - 20000000đ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-success" href="action/price3.php">Từ 20000000đ - 30000000đ</a>
    </li>
  </ul>

  <div class=" jumbotron-fluid bg-light">
    <!-- <div class="container  "> -->
    <div class=" row">
      <div class="col-sm-4">
        <h3 class="bg-warning text-center">Các Hãng Sản Phẩm</h3>

        <ul class="nav nav-pills flex-column ">
          <li class="nav-item">
            <a class="nav-link text-center text-light " href="action/iphone.php">
              <!-- <strong>Iphone</strong> -->
              <img src="//cdn.tgdd.vn/Brand/1/iPhone-(Apple)42-b_52.jpg" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-light" href="action/samsung.php">
              <!-- <strong>Samsung</strong> -->
              <img src="//cdn.tgdd.vn/Brand/1/Samsung42-b_25.jpg" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-light" href="action/oppo.php">
              <!-- <strong>Oppo</strong> -->
              <img src="//cdn.tgdd.vn/Brand/1/OPPO42-b_27.png" alt="">
            </a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">


        <iframe width="100%" height="315" src="https://www.youtube.com/embed/SQIbeAk-bFA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <div class="content">
          <h1 class="text-danger">Sản phẩm mới ra...</h1>



        </div>


      </div>

    </div>
  </div>
  <div class="jumbotron-fluid bg-light">
    <img src="https://cdn.tgdd.vn/2020/11/banner/1200-75-1200x75.png" style="width: 100%" alt="">
  </div>
  <!-- <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdn.tgdd.vn/2020/11/banner/1200-75-1200x75.png" alt="">
      </div>
    </div> -->
  <div class="container ">
    <div class="row mt-5 ">
      <h2 class="list-product-title ">Sản Phẩm <a href="../giohang/showgiohang.php" class="text-danger text-center"><i class="fas fa-luggage-cart"></i> Danh sách giỏ hàng</a></h2>
      <!-- kiểm tra lai  -->
      <!-- <?php if (isset($_SESSION['thangcong'])) : ?>

        <p class="text-danger"><?= $_SESSION['thangcong'] ?></p>
      <?php endif;
            unset($_SESSION['thangcong']) ?> -->
      <div class="list-product-subtitle">
        <p><strong>Liệt Kê Sản Phẩm</strong> </p>
      </div>
      <div class="product-group">
        <div class="row">
          <?php foreach ($product as $product) : ?>
            <div class="col-md-3 col-ms-6 col-12">
              <div class="card card-product mb-3">
                <img class="card-img-top img-product" src="<?= $product['ImgProduct']  ?>" alt="Card image cap ">
                <div class="card-body">
                  <h5 class="card-title"><?= $product['ProductName'] ?><span class="badge badge-secondary badge-danger">New</span></h5>
                  <p class="card-text text-danger"><?= number_format($product['price']) ?> Đ</p>
                  <form action="action/showproduct.php" method="post">
                    <input type="hidden" name="id" value="<?= $product['idProduct'] ?>">

                    <button class="btn btn-outline-success "><strong>Mua Ngay</strong> </button>
                  </form>
                  <!-- <a href="product/showproduct.php" class="btn btn-primary">Mua Ngay</a> -->
                </div>

              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-ms-6 col-12">
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <!-- end show -->
  <div class="jumbotron text-center " style="margin-bottom:0">
    <?php require_once "noidung/footer.php" ?>
  </div>
  <script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
      } else {
        video.pause();
        btn.innerHTML = "Play";
      }
    }
  </script>
  <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>