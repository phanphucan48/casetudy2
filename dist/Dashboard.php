 <?php
    require_once "database/connect.php";
    require_once "database/product.php";
    require_once "database/common.php";
    if (!isset($_SESSION['user'])) {
        header('Location: action/login.php');
    };
    // if (!isset($_SESSION['login_user'])) {
    //     header('location:login.php');
    // }
    $dashboard = new Product;
    $result = $dashboard->getAll();
    // die(var_dump($result));
    // $sql = "SELECT * FROM cuahangdienthoai.product ";
    // $result = $pdo->query($sql);
    // $result = $result->fetchAll();
    // die(var_dump($result));
    if (isset($_GET['idDelete'])) {
        $idDelete = $_GET['idDelete'];
        $deleteproduct = "DELETE FROM `cuahangdienthoai`.`product` WHERE (`idProduct` = '$idDelete');";
        $pdo->query($deleteproduct);
        header('Location: Dashboard.php');
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
     <title>Dashboard - SB Admin</title>
     <link href="css/styles.css" rel="stylesheet" />
     <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
 </head>

 <body class="sb-nav-fixed">
     <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <a class="navbar-brand" href="index.html">Quản trị hệ thống </a>
         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
             <div class="input-group">
                 <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                 <div class="input-group-append">
                     <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                 </div>
             </div>
         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ml-auto ml-md-0">
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="#">Settings</a>
                     <a class="dropdown-item" href="#">Activity Log</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="action/login.php">Logout</a>
                 </div>
             </li>
         </ul>
     </nav>
     <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
             <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                 <div class="sb-sidenav-menu">
                     <div class="nav">

                         <a class="nav-link" href="index.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Đơn Đặt hàng
                         </a>
                         <a class="nav-link" href="index.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Thêm admin
                         </a>
                         <a class="nav-link" href="index.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Đơn Hàng
                         </a>
                         <a class="nav-link" href="index.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Khách Hàng
                         </a>
                         <a class="nav-link" href="index.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Địa Điểm
                         </a>
                         <a class="nav-link" href="index.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Thống kê
                         </a>






             </nav>
         </div>
         <div id="layoutSidenav_content">
             <main>
                 <div class="container-fluid">
                     <h1 class="mt-4">Danh Sách Sản Phẩm</h1>
                     <ol class="breadcrumb mb-4">
                         <li class="breadcrumb-item active">Dashboard</li>
                     </ol>
                     <div class="row">
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-primary text-white mb-4">
                                 <div class="card-body">Thể loại</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-warning text-white mb-4">
                                 <div class="card-body">Đặt Hàng</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-success text-white mb-4">
                                 <div class="card-body">Đã bán</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-danger text-white mb-4">
                                 <div class="card-body">Tồn Kho</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="card mb-4">
                         <div class="card-header">
                             <i class="fas fa-table mr-1"></i>
                             DataTable Example
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                         <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>Image</th>
                                             <th>Status</th>
                                             <th>ProducSales</th>
                                             <th>Price</th>
                                             <th>Brand</th>
                                             <th>Date</th>
                                             <th>Function</th>

                                         </tr>
                                     </thead>
                                     <!-- <img src="" alt=""> -->
                                     <tbody>
                                         <?php foreach ($result as $product) : ?>
                                             <tr>
                                                 <td><?= $product['idProduct'] ?></td>
                                                 <td><?= $product['ProductName'] ?></td>
                                                 <td> <img width='70' height='70' src="<?= $product['ImgProduct']; ?>" alt=""> </td>
                                                 <td><?= $product['status'] ?></td>
                                                 <td><?= $product['SPKM'] ?></td>
                                                 <td><?= $product['price'] ?></td>
                                                 <td><?= $product['brank'] ?></td>
                                                 <td><?= $product['date'] ?></td>

                                                 <td>
                                                     <a class="btn btn-info" href="editproduct.php?idEdit=<?= $product['idProduct']; ?>">Edit</a>
                                                     <a class="btn btn-danger" href="Dashboard.php?idDelete=<?= $product['idProduct']; ?>">Delete</a>
                                                 </td>

                                             </tr>
                                         <?php endforeach; ?>
                                     </tbody>
                                 </table>
                                 <a href="addproduct.php" class="btn btn-info" role="button">ADD</a>
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