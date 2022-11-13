<?php 

    $con = mysqli_connect("localhost" , "root" , "" ,"library");

    $qry = mysqli_query($con , "select * from login"); 

?>