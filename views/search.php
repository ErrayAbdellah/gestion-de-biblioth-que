<?php

    $con = mysqli_connect("localhost","root","","library");

    $qry = "SELECT title FROM books WHERE title like '%".$_POST['search']."%'" ;
    
    $result = mysqli_query($GLOBALS['con'] ,$qry);
 
       
       while($row = mysqli_fetch_assoc($result))
       {
         
           echo "<h1>".$row['name']."</h1>";
           
       }
?>