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
        if($qnt <=0)
        {
          $qnt = 0;
        }

    
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
<body class="back">

    <nav class="navbar navbar-expand-lg shadow" style="height: 4rem; ">
    <div class="container-fluid ">
        <div class="">
        <a class="navbar-brand" href="../Home.php">
            <img src="../images/logo_.png" alt="" width="100" height="50" class="d-inline-block ">
        </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fa-solid fa-bars"></i>
        <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse bg-dark"  id="navbarScroll">
        
        </div>
    </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-light shadow">
  <div class="container-fluid">
  <div class="">
        <a class="navbar-brand" href="../Home.php">
            <img src="../images/logo_.png" alt="" width="100" height="50" class="d-inline-block ">
        </a>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto my-2 my-lg-0  " style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active text-white  " aria-current="page" href="../Home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="dashboard.php">Dashboard</a>
            </li>
        </ul>
        <ul class="navbar-nav navProfile" >
        <li class="nav-item dropdown pe-4">
            <a class="nav-link dropdown-toggle text-white me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#">My Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logOut.php">logout</a></li>
            </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
    <section class="h-100 " style=" padding-top: 1rem ;">
    <div class=" d-flex flex-wrap justify-content-center ">
              <div class="m-2 me-2" style="width: 16rem;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Books</h5>
                        <span class="h2 font-weight-bold mb-0"><?php echo $books ;?></span>
                      </div>
                      <div class="col-auto" style="font-size: 2rem ;" >
                          <i class="fa fa-book"></i>
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
                      <div class="col-auto" style="font-size: 2rem ;" >
                          <i class="fa fa-book"></i>
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
                        <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                        <span class="h2 font-weight-bold mb-0"><?php echo $selling ;?></span>
                      </div>
                      <div class="col-auto" style="font-size: 2rem ;" >
                          <i class="fa fa-book"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="m-2 " style="width: 16rem;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Perform</h5>
                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                      </div>
                      <div class="col-auto" style="font-size: 2rem ;" >
                          <i class="fa fa-book"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Page content -->
            </div>
            
            <div class="d-flex justify-content-around overflow-scroll csrl " style="height:20rem;">
              <table class="table bg-light " style="width: 40rem ;">
                <thead class="thead-dark" >
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Quantiy</th>
                    <th scope="col">Category</th>
                    <th scope="col">date</th>
                    <th scope="col">price</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $cnt = 0 ;
                  $id = $_SESSION['admin']['id'];
                    $qry = "SELECT b.*, l.name AS 'language',c.name AS 'category' FROM books b 
                    INNER JOIN languag l ON l.id  = b.LanguagID 
                    INNER JOIN category c ON c.id = b.categoryID WHERE b.adminID = $id
                    ORDER  by title ASC ";

                    $result = mysqli_query($GLOBALS['con'],$qry);
                        while($row = mysqli_fetch_assoc($result))
                        {
                          $title      = $row["title"];
                          $date       = $row["dateCreate"];
                          $price      = $row["price"];
                          $category   = $row['category'];
                          $quantity   = $row['quntity'];
                          $cnt++;
                       ?>
                  <tr>
                    <th scope="row"><?= $cnt?></th>
                    <td><?= $title?></td>
                    <td><?= $quantity?></td>
                    <td><?= $category?></td>
                    <td><?= $date?></td>
                    <td><?= $price?> MAD</td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>


              

              

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