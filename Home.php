<?php 
include('views/scripte.php');


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/Logo_.png" alt="" width="100" class="d-inline-block align-text-center">
        </a>
        <img src="images/profile.jpg" alt="" id="idProfile"  class="align-items-end rounded-circle">
        </div>
      </nav>

      <div>
        <div class="d-flex justify-content-center" >
          <img src="images/imageTest/book3.png" id="p" class="rounded-pill">
        </div>
      
        <div class="px-5 pt-5">
          <input type="text" class="bg-white border-0 rounded-pill " style="width: 20rem; height: 2.5rem;" placeholder="Search" >
          <button type="submit" class=" rounded-pill">Search</button>
        </div>

      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-light rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="clearmodel()"> Add new book <i class="fa fa-plus "></i></button>
      </div>
      <br>
      <hr>
       <section class="container d-flex justify-content-around flex-wrap align-content-start py-5 ">

        <?php getBooks() ; ?>


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
     
      <footer>
        ...
      </footer>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3">
        <!-- content model -->
        <form action="Home.php" method="post" id="formTask">
          <div class=" mb-3">
            <input type="text" class="form-control" id="title" name="title" required placeholder="Title">
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

          <select class="form-select mb-3" id="language" name="languge"  required>
            <option selected >Choose the language of the book</option>
            <option value="1">Arab</option>
            <option value="2">Français</option>
            <option value="3">English</option>
          </select>
          <div class="mb-3">
            <input type="number" class="form-control" id="price" name="price" required placeholder="Price">
          </div>
          <div class="mb-3 d-flex align-items-center">
          <label for="formFile" class="form-label me-3 ">Choose a picture : </label>
            <input class="form-control align-text-center" type="file" id="formFile" style="width: 9rem;">
          </div>
          <!-- end content model -->
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="addNewBook" value="ADD NEW BOOK">
        </div>
      </form>
    </div>
  </div>
</div>







<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="assets/js/scripte.js"></script>
</body>
</html>