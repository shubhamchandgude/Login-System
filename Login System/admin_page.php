 <?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>


<!-- 
<?php
// coonecting to database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "company_portal";

// create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "<br>";
}

$sql = "SELECT * FROM `customers`";
$result = mysqli_query($conn, $sql);



    while($row = mysqli_fetch_assoc($result)) {
        echo $row['cust_id']. ". " .  $row['cust_name'] ." ".  $row['mobile_no']  ." ".  $row['address'] ." " .  $row['photo']." " .  $row['user_id'] ." ". $row['created_date'] ." ".  $row['status'] . ".";
         echo "<br>";
     }


     
     echo "<br>";
     echo "<hr>";
     echo "<br>";

     
     $sql = "SELECT * FROM `products`";
     $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
        echo $row['prod_id']. ". " .  $row['cust_id'] ." ".  $row['name']  ." ".  $row['qty'] ." " .  $row['mrp']." " .  $row['image'] ." ". $row['description'] ." ".  $row['user_id'] . " ".  $row['job_status'] . " ".  $row['updated_date']  . ".";
         echo "<br>";
     }
     

?> -->


      <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>welcome admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">


</head>
  
    
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                    <!-- <a href="logout.php" class="btn">logout</a> -->

                </li>
            </ul>


            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Company Portal</span>
            </a>


            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">COMPANY PORTAL</a>
                    </div>
                </div>


                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="user_page.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Customers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="user_page.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Products</p>
                                    </a>
                                </li>

            </div>

        </aside>


        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                                <a href="logout.php" class="btn btn-danger mx-2">logout</a>
                            </ol>
                        </div>
                    </div>


                </div>


                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">


                                <div class="card">
                                    <div class="card-header border-0">
                                        <h3 class="card-title">Customers</h3>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool btn-sm">
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <a href="#" class="btn btn-tool btn-sm">
                                                <i class="fas fa-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <div id="example_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="pl-2" placeholder="SEARCH HERE"
                                                    aria-controls="example"></label></div>
                                        <table class="table table-striped table-valign-middle">
                                            <thead>
                                                <tr>
                                                    <th>Cust Id</th>
                                                    <th>Cust Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Address</th>
                                                    <th>Photo</th>
                                                    <th>User Id</th>
                                                    <th>Created Date</th>
                                                    <th>Status</th>
                                                    <th>Show</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                  



                                                 $sql = "SELECT * FROM `customers`";
                                                 $result = mysqli_query($conn, $sql);



                                                  while($row = mysqli_fetch_assoc($result)) {
                                                  
                                                    ?>
                                                <tr>
                                                    <td class="stud_id"> <?php echo $row['cust_id']; ?> </td>
                                                    <td> <?php echo $row['cust_name']; ?> </td>
                                                    <td> <?php echo $row['mobile_no']; ?> </td>
                                                    <td> <?php echo $row['address']; ?> </td>
                                                    <td> <?php echo $row['photo']; ?> </td>
                                                    <td> <?php echo $row['user_id']; ?> </td>
                                                    <td> <?php echo $row['created_date']; ?> </td>
                                                    <td> <?php echo $row['status']; ?> </td>
                                                    <td> <a class="btn btn-primary" href="show.php?id=<?php echo $row['cust_id']; ?>"
                                                            role="button">Show</a> </td>
                                                </tr>
                                                <?php
                                                }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header border-0">
                                        <h3 class="card-title">Products</h3>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool btn-sm">
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <a href="#" class="btn btn-tool btn-sm">
                                                <i class="fas fa-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <div id="example_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="pl-2" placeholder="SEARCH HERE"
                                                    aria-controls="example"></label></div>
                                        <table class="table table-striped table-valign-middle">
                                            <thead>
                                                <tr>
                                                    <th>Prod Id</th>
                                                    <th>Cust Id</th>
                                                    <th>Name</th>
                                                    <th>QTY</th>
                                                    <th>MRP</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th>User Id</th>
                                                    <th>Job Status</th>
                                                    <th>Updated Date</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                  



                                  $sql = "SELECT * FROM `products`";
                                  $result = mysqli_query($conn, $sql);



                                   while($row = mysqli_fetch_assoc($result)) {
                                   
                                     ?>
                                                <tr>
                                                    <td> <?php echo $row['prod_id']; ?> </td>
                                                    <td> <?php echo $row['cust_id']; ?> </td>
                                                    <td> <?php echo $row['name']; ?> </td>
                                                    <td> <?php echo $row['qty']; ?> </td>
                                                    <td> <?php echo $row['mrp']; ?> </td>
                                                    <td> <?php echo $row['image']; ?> </td>
                                                    <td> <?php echo $row['description']; ?> </td>
                                                    <td> <?php echo $row['user_id']; ?> </td>
                                                    <td> <?php echo $row['job_status']; ?> </td>
                                                    <td> <?php echo $row['updated_date']; ?> </td>
                                                    <!-- <td> <a class="btn btn-primary edit_btn" href="#" role="button">Edit</a> </td> -->
                                                    <td> <a class="btn btn-primary" href="edit.php?id=<?php echo $row['prod_id']; ?>"
                                                            role="button">Edit</a> </td>
                                                    </td>
                                                </tr>
                                                <?php
                                 }
                             ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
                </div>



            </div>

        </div>

    </div>




    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>



</html>

    