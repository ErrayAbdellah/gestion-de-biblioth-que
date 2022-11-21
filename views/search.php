<?php
   // session_start();
include('scripte.php');
    $con = mysqli_connect("localhost","root","","library");

    $qry ="SELECT b.*, l.name AS 'language',c.name AS 'category' FROM books b 
            INNER JOIN languag l ON l.id  = b.LanguagID 
            INNER JOIN category c ON c.id = b.categoryID WHERE b.adminID = ".$_SESSION['admin']['id']." AND b.title LIKE '%".$_POST['search']."%' ";

    $result = mysqli_query($GLOBALS['con'] ,$qry);
 
       
      
         
        while($row = mysqli_fetch_assoc($result))
        {
            $id         = $row["id"];
            $title      = $row["title"];
            $author     = $row["author"];
            $state      = $row["state"];
            $date       = $row["dateCreate"];
            $language   = $row["language"];
            $price      = $row["price"];
            $category   = $row['category'];
            $quantity   = $row['quntity'];
            $image      = $row['image'];
            // var_dump($row);
            // echo "***************************************************************";
            ?>
                    <div class="cards my-5 mx-3 ">
                        <div class="card shadow rounded-3">
                            <div class="p-auto d-flex justify-content-center" style="height: 10rem ;">
                                <img class="card-img-top w-50" src="./assets/IMG/<?= $image?>" alt="Company logo">
                               
                            </div>
                        <div class="card-body py-0">
                            <h5 class="card-title"> <?php echo $title  ?></h5>
                            <ul class="list-group" style="height: 13rem;">
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-user"       style="font-size: 12px;"></i> <?php echo  $author    ;?>      </li>
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-balloons"      style="font-size: 12px;"></i> <?php echo  $category  ;?>      </li>
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-language"   style="font-size: 12px;"></i> <?php echo  $language  ;?>      </li>
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-map-marker" style="font-size: 12px;"></i> <?php echo  $state     ;?>      </li>
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-calendar"   style="font-size: 12px;"></i> <?php echo  $date      ;?>      </li>
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-money-bill-1"      style="font-size: 12px;"></i> <?php echo  $price     ;?> MAD  </li>
                                <li class="list-group-item list-group-item-light" style="height: 14%; font-size: 14px;"><i class="fa fa-box-open"></i> <?php echo  $quantity  ?></li>
                            </ul>
                        </div>
                            <!-- <input type="text" id="bookID" name="bookID" value="<?php echo $id ;?>" hidden> -->
                            <div class=" d-flex justify-content-between pt-1">
                                    <button type="button" class="btn btn-danger rounded-pill" 
                                    id="left-panel-link" value ="<?php echo $row['id'] ;?>" 
                                    data-bs-toggle="modal" data-bs-target="#SellBooks"
                                    onclick="sell(<?php echo $id ;?>)">
                                    Sell Now</button>
                                
                                <button type="submit" class="btn btn-dark rounded-pill"data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="right-panel-link" value="<?php echo $row['id'] ;?>" name="update"
                                onclick="getBook(<?php echo $id ;?> ,'<?php echo $title ; ?>' , '<?php echo $author ;?>' ,'<?php echo $language ;?>' , '<?php echo $state ;?>' , '<?php echo $date ;?>' ,<?php echo  $price ;?>,<?php echo  $quantity ;?>,<?php echo  $row['categoryID'] ;?> ,'<?php echo $image;?>')"
                                >Update</button>
                            </div>
                        </div>          
                    </div>
                <?php
        }
           
       
?>