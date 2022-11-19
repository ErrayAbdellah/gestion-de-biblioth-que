<?php
    $con = mysqli_connect("localhost","root","","library");
    session_start();
   
    
        $id         = $_SESSION['admin']['id'] ;
        $con        = $GLOBALS['con'];
        $qryBooks   = "SELECT COUNT(*) FROM books WHERE adminID = $id";
        $qrySelling = "SELECT COUNT(*) FROM sell WHERE bookID in (SELECT id FROM books WHERE adminID = $id)";
        $qryQnt     = "SELECT SUM(quantity) FROM sell WHERE bookID in (SELECT id FROM books WHERE adminID = $id)";
        $books      = mysqli_fetch_column(mysqli_query($con,$qryBooks));
        $selling    = mysqli_fetch_column(mysqli_query($con,$qrySelling));
        $qnt        = mysqli_fetch_column(mysqli_query($con,$qryQnt));
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/styles/style.css">

</head>
<body >

    <nav class="navbar navbar-expand-lg shadow" style="height: 4rem; ">
    <div class="container-fluid ">
        <div class="">
        <a class="navbar-brand" href="#">
            <img src="../images/Logo_.png" alt="" width="100" height="50" class="d-inline-block ">
        </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fa-solid fa-bars"></i>
        <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" style="background-color: #DDC8B1;" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active text-black-50" aria-current="page" href="../Home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active text-black-50" aria-current="page" href="dashboard.php">Dashboard</a>
            </li>
        </ul>
        <ul class="navbar-nav navProfile" >
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#">My Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="views/logOut.php">logout</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <section class="h-100 back" style=" padding-top: 12rem ;">
    <div class=" d-flex flex-wrap justify-content-center ">
              <div class="m-2 me-2" style="width: 16rem;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Books</h5>
                        <span class="h2 font-weight-bold mb-0"><?php echo $books ;?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                          <i class="fas fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="m-2 me-2" style="width: 16rem;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Qnt seles</h5>
                        <span class="h2 font-weight-bold mb-0"><?php echo $qnt ;?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                    </div>
                    <!-- <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                      <span class="text-nowrap">Since last week</span>
                    </p> -->
                  </div>
                </div>
              </div>
              <div class="m-2 me-2" style="width: 16rem;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                        <span class="h2 font-weight-bold mb-0"><?php echo $selling ;?></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <!-- <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                      <span class="text-nowrap">Since yesterday</span>
                    </p> -->
                  </div>
                </div>
              </div>

              <div class="m-2 " style="width: 16rem;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                          <i class="fas fa-percent"></i>
                        </div>
                      </div>
                    </div>
                    <!-- <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p> -->
                  </div>
                </div>
              </div>
              <!-- Page content -->
            </div>
    </section>
<!-- 
    <footer class="card-footer rounded-bottom rounded-pill text-light" style="background-color: #613C2D;">
       <h3 class="pt-3 ps-5 fs-5"> Copyright © 2022. All rights reserved.</h3>
    </footer> -->
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="assets/js/scripte.js"></script>

</body>
</html>