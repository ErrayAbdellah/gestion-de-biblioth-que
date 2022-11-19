<?php 
include('views/scripte.php');

if(!isset($_SESSION['admin']))
{
  header('location: index.php');
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
    <link rel="stylesheet" href="assets/styles/style.css">
      <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
    <!-- END parsley css-->
</head>

<body>
      <!-- ****************************Navbar****************************** -->

      <nav class="navbar navbar-expand-lg shadow" style="height: 4rem; ">
        <div class="container-fluid ">
          <div class="">
            <a class="navbar-brand" href="#">
              <img src="images/Logo_.png" alt="" width="100" height="50" class="d-inline-block ">
            </a>
          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          
          <i class="fa-solid fa-bars"></i>
          <span class="navbar-toggler-icon d-flex"></span>
          </button>


          <div class="collapse navbar-collapse" style="background-color: #DDC8B1;" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active text-black-50" aria-current="page" href="Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-black-50" aria-current="page" href="views/dashboard.php">Dashboard</a>
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
      <!-- ********************************************************** -->

      <div  class="mt-3 w-100">
        <div class="d-flex w-75  rounded-pill my-3 py-5 " id="cove">
          <!-- <img src="images/imageTest/book3.png" id="p" class="rounded-pill"> -->
          <div class="py-5 w-100" id="cov" style="width: 100%;" >

            <div class="d-flex justify-content-between bg-inf " >
              <h1 class="ms-2 me-3 text-light" >Welcome </h1> 
              <h1 style="color:#D09A5E ;"><?php   echo $_SESSION['admin']['name']; ?></h1> 
            </div>

              <div class="ms-5  text-break w-100">
                <h4 class="text-light ">Books guide in 
                  <span class="tit">childhood</span>
                   and amusement in 
                  <span class="tit">old age</span>  
                  and companion in 
                  <span class="tit">solitude.</span>  
                </h4>
              </div>
          </div>
         
        </div>
      
        <div class="px-5 pt-5">
          <input type="text" class="bg-white border-0 rounded-pill " style="width: 20rem; height: 2.5rem;" placeholder="Search" required>

          <input type="submit" class="btn btn-light rounded-pill" value="Search">
        </div>

      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-light rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="clearmodel()"> Add new book <i class="fa fa-plus "></i></button>
      </div>
      <br>
      <hr>
       <section class="container d-flex justify-content-around flex-wrap align-content-start py-5 ">

        <?php echo getBooks() ; ?>
      
    
        <!-- <div class="cards ">
          <div class="card shadow rounded-3">
            <div class="p-auto d-flex justify-content-center" style="height: 10rem ;">
              <img class="card-img-top w-50" src="images/imageTest/book1.jpg" alt="Company logo">
            </div>
            <div class="card-body">
              <h5 class="card-title">Card hfhfhrhrhrhhrhrrtle</h5>
              <ul class="list-group">
                <li class="list-group-item list-group-item-light"><i class="fa fa-user"       style="font-size:20px;"></i>   Author     </li>
                <li class="list-group-item list-group-item-light"><i class="fa fa-language"   style="font-size:20px;"></i>   Arab       </li>
                <li class="list-group-item list-group-item-light"><i class="fa fa-map-marker" style="font-size:20px;"></i>   Maroc      </li>
                <li class="list-group-item list-group-item-light"><i class="fa fa-calendar"   style="font-size:20px;"></i>   2022-12-12 </li>
                <li class="list-group-item list-group-item-light"><i class="fa fa-money"      style="font-size:20px;"></i>   120 MAD    </li>
              </ul>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <button type="submit" class="btn btn-danger rounded-pill" id="left-panel-link" >Delete</button>
              <button type="button" class="btn btn-dark rounded-pill"data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="right-panel-link">Update</button>
            </div>
          </div>          
        </div>-->

      </section> 
     
      <footer class="card-footer rounded-bottom rounded-pill" style="background-color: #613C2D;">
       <h3 class="pt-3 ps-5 fs-5 text-light"> Copyright © 2022. All rights reserved.</h3>
      </footer>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3">
        <!-- content model -->
        <form class="" action="Home.php" method="post" id="formTask" enctype="multipart/form-data" data-parsley-validate>
          <div class=" mb-3">
            <input type="text" class="form-control" id="title" name="title" required placeholder="Title" >
          </div>
          <div class=" mb-3">
            <input type="text" class="form-control" id="author" name="author" required placeholder="Author">
          </div>
          <div class=" mb-3">
            <input type="text" class="form-control" id="state" name="state" required placeholder="state the book">
          </div>
          <div class=" mb-3">
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <select class="form-select mb-3" id="category" name="category"  required>
            <option selected>chose Category of the book</option>
            <option value="1">Adventure stories</option>
            <option value="2">Autobiography and memoir</option>
            <option value="3">Biography</option>
            <option value="4">Classics</option>
            <option value="5">Crime</option>
            <option value="6">Essays</option>
            <option value="7">Fairy tales, fables, and folk tales</option>
            <option value="8">Fantasy</option>
            <option value="9">Historical fiction</option>
            <option value="10">Horror</option>
            <option value="11">Humour and satire</option>
            <option value="12">Literary fiction</option>
            <option value="13">Mystery</option>
            <option value="14">Poetry</option>
            <option value="15">Plays</option>
            <option value="16">Romance</option>
            <option value="17">Science fiction</option>
            <option value="18">Self-help</option>
            <option value="19">Short stories</option>
            <option value="20">Thrillers</option>
            <option value="21">War</option>
            <option value="22">Women’s fiction</option>
            <option value="23">Young adult</option>
            <option value="24">other</option>
          </select>
          
          <select class="form-select mb-3" id="language" name="languge"  required>
            <option selected>chose language of the book</option>
            <option value="ar">Arabic</option>
            <option value="fr">france</option>
            <option value="en">English</option>
            <option value="zh">Chinese</option>
            <option value="es">Spanish</option>
            <option value="hi">Hindi</option>
            <option value="pt">Portuguese</option>
            <option value="bn">Bengali</option>
            <option value="ru">Russian</option>
            <option value="ja">Japanese</option>
            <option value="pa">Punjabi</option>
          </select>
          

          <div class="mb-3">
            <input type="number" class="form-control" id="price" name="price" required placeholder="Price">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" id="quantity" name="quantity" required placeholder="quantity">
          </div>
          <div class="mb-3 d-flex align-items-center">
          <label for="formFile" class="form-label me-3 ">Choose a picture : </label>
            <input class="form-control align-text-center" type="file" id="formFile" name="formFile" style="width: 9rem;">
          </div>
          <!-- end content model -->
        </div>
        <div class="modal-footer d-flex justify-content-between" id="btns">
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="hidden" name="idUpdate" id="idUpdate">
            <input type="submit" class="btn btn-success rounded-pill d-none" name="addNewBook" id='addNewBook' value="ADD NEW BOOK">
            <div id="btnss" class="d-none">
            <input type="submit" class="btn btn-danger rounded-pill me-1" id="left-panel-link" name="delete" value ="delete">
            <input type="submit" class="btn btn-info  rounded-pill" name="updateModel" id="updateModel" value="updateModel">
          </div>  
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="SellBooks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SellBooks">Selling Books</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3">
        <!-- content model  -->
        <form action="Home.php" method="post" >
          <div class=" mb-3">
            <input type="number" class="form-control" id="qnt" name="qnt" required placeholder="Quantity" >
          </div>
          <input type="hidden" name="idBookSell" id="idBookSell" >
          
        
        <!--end content model -->
        </div>
        <div class="modal-footer d-flex justify-content-between" id="btns">
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success rounded-pill me-1" id="left-panel-link" name="Sell" value ="Sell">
        </div>
      </form>
    </div>
  </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="assets/js/scripte.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->
</body>
</html>