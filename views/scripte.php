
<?php 
session_start();
$con = mysqli_connect("localhost" , "root" , "" ,"library");
$qry =mysqli_query($GLOBALS['con'] ,  " SELECT b.*, l.name AS 'language',c.name AS 'category' FROM books b 
                                        INNER JOIN languag l ON l.id  = b.LanguagID 
                                        INNER JOIN category c ON c.id = b.categoryID
                                        WHERE  b.adminID = ".$_SESSION['id']);
//include('../database/connect.php');


if(isset($_POST['signIn']))         signIn() ;
if(isset($_POST['signUp']))         signUp() ;
if(isset($_POST['addNewBook']))     addNewBook() ;
if(isset($_POST['delete']))     delete() ;


function signIn()
{  
    //$qrySession = mysqli_fetch_assoc(mysqli_query($GLOBALS['con'], "select * from admin"));
    $email = htmlspecialchars(trim(strtolower($_POST['SignIn_Email'])));
    $password =md5($_POST['SignIn_password']);
    $qrye = mysqli_query($GLOBALS['con'] , "SELECT *, count(*) as 'user'  from admin where email = '$email' and pasword = '$password'" ); 
    $qry = mysqli_fetch_assoc($qrye);
    if( $qry['user'] != 0)
    {
        $_SESSION['id']   = $qry['id']   ;
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
    $qry = "INSERT INTO admin(name ,lastName, email ,pasword ,dateAdmin) VALUES ('$nama','$date','$email','$password','$LastNama')";
    mysqli_query($GLOBALS['con'],$qry);
}

function addNewBook()
{
    $title      = $_POST['title'];
    $author     = $_POST['author'];
    $state      = $_POST['state'];
    $date       = $_POST['date'];
    $language   = $_POST['languge'];
    $price      = $_POST['price'];
    $admin      = $_SESSION['id'];
    $quantity   = $_POST['quantity'];
    $category   = $_POST['category'];
    $qry = "INSERT INTO `books`(title, state, dateCreate, price, adminID, quntity, LanguagID, categoryID, author) 
            VALUES ('$title','$state','$date',$price,$admin,$quantity,'$language',$category,'$author')" ;
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
        $date       = $row["dateCreate"];
        $language   = $row["LanguagID"];
        $price      = $row["price"];
        $category   = $row['category'];
        $quantity   = $row['quntity'];
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
                    <li class="list-group-item list-group-item-light"></i><?php echo  $category  ?></li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-language"   style="font-size:20px;"></i> <?php echo  $language ?>       </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-map-marker" style="font-size:20px;"></i> <?php echo  $state ?>     </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-calendar"   style="font-size:20px;"></i> <?php echo  $date ?> </li>
                    <li class="list-group-item list-group-item-light"><i class="fa fa-money"      style="font-size:20px;"></i> <?php echo  $price  ?> MAD    </li>
                    <li class="list-group-item list-group-item-light">Qnt : </i> <?php echo  $quantity  ?></li>
                    </ul>
                </div>
                <input type="text" id="bookID" name="bookID" value="<?php echo $id ;?>" hidden>
                <div class="card-footer d-flex justify-content-between">
                    <form action="Home.php" method="post">
                        <button type="submit" class="btn btn-danger rounded-pill" id="left-panel-link" name="delete" value ="<?php echo $row['id'] ;?>">delete</button>
                    </form>
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
//    var_dump($_POST);
    $id = $_POST['delete'];
    $qry = "DELETE FROM `books` WHERE id = ".$id ;
    mysqli_query($GLOBALS['con'],$qry);
    header('location: Home.php');
    
}
?>