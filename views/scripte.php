<?php 
$con = mysqli_connect("localhost" , "root" , "" ,"library");
$qry =mysqli_query($GLOBALS['con'] ,  "SELECT b.* , l.name as 'language' FROM books b INNER JOIN languag l on  l.id = b.LanguagID ");
//include('../database/connect.php');

session_start();

if(isset($_POST['signIn']))         signIn() ;
if(isset($_POST['signUp']))         signUp() ;
if(isset($_POST['addNewBook']))     addNewBook() ;
if(isset($_POST['delet']))     delete() ;


function signIn()
{  
    $qrySession = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'], "select * from login"));
    $email = htmlspecialchars(trim(strtolower($_POST['SignIn_Email'])));
    $password =md5( $_POST['SignIn_password']);
    $qry = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'] , "SELECT * ,count(*) as 'user'  from login where email = '$email' and pasword = '$password'" )); 
    if( $qry['name'] > 0)
    {
        $_SESSION['name'] = $qry['name'] ;
        header('Location:  Home.php') ;
    }
    else
    {
        echo "Nooooooooooooo";
    }
}

function signUp()
{
    
    $nama = $_POST['txtName'];
    $LastNama = $_POST['txtLastName'];
    $date = $_POST['dateId'];
    $email = trim(strtolower($_POST['email']));
    $password = md5($_POST['passxord']);
    $qry = "INSERT INTO login(name, lastNmae,dateBirth, email,pasword) VALUES ('$nama','$LastNama','$date','$email','$password')";
    mysqli_query($GLOBALS['con'],$qry);
}

function addNewBook()
{
    $title      = $_POST['title'];
    $author     = $_POST['author'];
    $state      = $_POST['state'];
    $date       = $_POST['date'];
    $language    = $_POST['languge'];
    $price      = $_POST['price'];
    $qry = "INSERT INTO books(title, author, state, dateBook, LanguagID, price) VALUES ('$title','$author','$state','$date',$language,'$price')" ;
    mysqli_query($GLOBALS['con'],$qry);
    
    // header('location : ../Home.php');
    header('location: Home.php');
}

function getBooks()
{
   
    while($row = mysqli_fetch_assoc($GLOBALS['qry']))
    {
        $id         = $row["id"];
        $title      = $row["title"];
        $author     = $row["author"];
        $state      = $row["state"];
        $date       = $row["dateBook"];
        $language    = $row["language"];
        $price      = $row["price"];
        // var_dump($row);
        // echo "***************************************************************";
        ?>
                <div class="cards my-5 mx-3 ">
                <div class="card shadow rounded-3">
                <div class="p-auto d-flex justify-content-center" style="height: 10rem ;">
                    <img class="card-img-top w-50" src="images/imageTest/book1.jpg" alt="Company logo">
                </div>
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $title  ?></h5>
                    <ul class="list-group">
                    <li class="list-group-item list-group-item-light"><i class="fa fa-user"       style="font-size:20px;"></i> <?php echo  $author ?>     </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-language"   style="font-size:20px;"></i> <?php echo  $language ?>       </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-map-marker" style="font-size:20px;"></i> <?php echo  $state ?>     </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-calendar"   style="font-size:20px;"></i> <?php echo  $date ?> </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-money"      style="font-size:20px;"></i> <?php echo  $price  ?> MAD    </li>
                    </ul>
                </div>
                <input type="text" id="bookID" name="bookID" value="<?php echo $id ;?>" hidden>
                <div class="card-footer d-flex justify-content-between">
                    <input type="submit" class="btn btn-danger rounded-pill" id="left-panel-link" value ="Delete">
                    <input type="submit" name="delete" value="hhhh">
                    <button type="button" class="btn btn-dark rounded-pill"data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="right-panel-link"
                    onclick="getBook(<?php echo $id ;?>, '<?php echo $title ; ?>' , '<?php echo $author ;?>' , <?php echo $row['LanguagID'] ;?> , '<?php echo $state ;?>' , '<?php echo $date ;?>' ,<?php echo  $price ;?>)"
                    >Update</button>
                </div>
                </div>          
            </div>
            
            <?php
    }
}


function delete()
{
    $id = $_POST['bookID'];
    echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
    $qry = "DELETE FROM `books` WHERE id = ".$id ;
    mysqli_query($GLOBALS['con'],$qry);
    header('location: Home.php');
    
}
?>