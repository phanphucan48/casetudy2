<?php
include "./connect.php";
$query = "SELECT * FROM cuahangdienthoai.product LIMIT 8;";
$result = $pdo->query($query);
$result = $result->fetchAll();
// die(var_dump($result));
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />


  <title>Shop</title>
</head>

<body>
  <!-- menu -->
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
            <a class="nav-link text-light btn btn-outline-warning font-weight-bold" href="sanpham.php"><i class="fas fa-mobile-alt text-light"></i>Sản Phẩm</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link text-light btn btn-outline-warning font-weight-bold" href="#"><i class="fa fa-hands-helping text-light"></i>Trợ Giúp</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light btn btn-outline-warning font-weight-bold" href="#" id="navbarDropdown">
              <i class="fas fa-user-lock text-light "></i> Đăng Nhập
            </a>
            <div class="dropdown-content" aria-labelledby="navbarDropdown">
              <a class="dropdown-item btn btn-outline-warning" href="Đangky/Đangky.php">Đăng ký</a>
              <a class="dropdown-item btn btn-outline-warning" href="login.php">Đăng Nhập</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link  a-nava font-weight-bold text-light btn btn-outline-warning" href="showgiohang.php"><i class="fa fa-cart-plus text-light"></i>
              <span class="badge badge-danger">
                <?php if (isset($_SESSION['cart'])) {
                  echo count($_SESSION['cart']);
                } else {
                  echo "0";
                };
                ?>
              </span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">

          <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Bạn muốn tìm.." aria-label="Search">
          <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Tìm Kiếm"></input>
          <!-- <input type="hidden" name="timkiem" value="Tìm-kiếm"> -->
        </form>
      </div>
    </div>


  </nav>
  <!-- end menu -->

  <!-- slide -->
  <div id="carouselExampleIndicators" class="carousel slide mt-1  " data-ride="carousel">
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
      <a class="nav-link btn btn-outline-success " href="price1.php">Dưới 10000000đ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-success" href="price2.php">Từ 10000000đ - 20000000đ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-success" href="price3.php">Từ 20000000đ - 30000000đ</a>
    </li>
  </ul>

  <div class=" jumbotron-fluid bg-light">
    <!-- <div class="container  "> -->
    <div class=" row">
      <div class="col-sm-4">
        <h3 class="bg-warning text-center">Các Hãng Sản Phẩm</h3>

        <ul class="nav nav-pills flex-column ">
          <li class="nav-item">
            <a class="nav-link text-center text-light " href="iphone.php">
              <!-- <strong>Iphone</strong> -->
              <img src="//cdn.tgdd.vn/Brand/1/iPhone-(Apple)42-b_52.jpg" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-light" href="samsung.php">
              <!-- <strong>Samsung</strong> -->
              <img src="//cdn.tgdd.vn/Brand/1/Samsung42-b_25.jpg" alt="">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center text-light" href="oppo.php">
              <!-- <strong>Oppo</strong> -->
              <img src="//cdn.tgdd.vn/Brand/1/OPPO42-b_27.png" alt="">
            </a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">
        <div id="carouselExampleIndicators" class="carousel slide mt-1  " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/800-300-800x300-6.png" alt="First slide"> -->
              <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/10/banner/big-pk-800-300-800x300-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/800-300-800x300-7.png " alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://cdn.tgdd.vn/2020/11/banner/800-300-800x300-6.png" alt="Third slide">
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
        <br>
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
      <h2 class="list-product-title ">Sản Phẩm</h2>
      <div class="list-product-subtitle">
        <p><strong>Liệt Kê Sản Phẩm</strong> </p>
      </div>
      <div class="product-group">
        <div class="row">
          <?php foreach ($result as $product) : ?>
            <div class="col-md-3 col-ms-6 col-12">
              <div class="card card-product mb-3">
                <img class="card-img-top img-product" src="<?= $product['ImgProduct']  ?>" alt="Card image cap ">
                <div class="card-body">
                  <h5 class="card-title"><?= $product['ProductName'] ?><span class="badge badge-secondary badge-danger">New</span></h5>
                  <p class="card-text text-danger"><?= number_format($product['price']) ?> Đ</p>
                  <form action="product/showproduct.php" method="post">
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
    <footer class="page-footer font-small indigo bg-warning">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Links -->


            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-dark">Lịch Sử Mua Hàng</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Tìm Hiểu Về Mua Trả Góp</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Chính Sách Bảo Hành</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Chính Sách Đổi Trả</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Links -->


            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-dark">Giới Thiệu Công Ty</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Tuyển Dụng</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Gửi Góp Ý,Khiếu Nại</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Tìm Siêu Thị</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->


          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Links -->

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-dark"><i class="fab fa-facebook-square">Facebook</i></a>
              </li>
              <li>
                <a href="#!" class="text-danger"><i class="fab fa-instagram-square text-danger"></i>instagram</a>
              </li>
              <li>
                <a href="#!" class="text-dark"><i class="fab fa-twitter-square"></i>twitter</a>
              </li>
              <li>
                <a href="#!" class="text-dark"><i class="fas fa-envelope-square"></i>email</a>
              </li>

            </ul>

          </div>
          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Links -->


            <ul class="list-unstyled">

              <!-- <li>
                <a href="#!" class="text-dark">Gọi Khiếu Nại</a>
              </li>  -->
              <li>
                <a href="#!" class="text-dark">
                  <img src="../imge/google.png" alt="">
                </a>
              </li>

              <li>
                <a href="#!" class="text-dark">
                  <img src="../imge/appstor.png" alt="">
                </a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 bg- bg-dark">© 2020 Cửa Hàng Điện Thoại:
        <a href="https://mdbootstrap.com/"> DienThoai.com</a>
      </div>
      <!-- Copyright -->

    </footer>
  </div>

  <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>