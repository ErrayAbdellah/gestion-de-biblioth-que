 <?php 
        
        if(isset($_POST['tit']) && isset($_FILES['filee']))
        {
            echo '<pre>';
            print_r($_FILES['filee']) ;
            echo '<pre>';
            $name = $_FILES['filee']['name'];
            $size = $_FILES['filee']['size'];
            $tmp_name = $_FILES['filee']['tmp_name'];
            $error = $_FILES['filee']['error'];

            if($error == 0)
            {
                if($size >4000)
                {
                    $msg = "Sorry ! this picture if to latge," ;
                    echo "yeesss";
                    //header("location : index.php?error=$msg"); 
                }else 
                {
                    echo "hhhhhhhhhhh";
                    //header("location : index.php"); 
                }
            }
        }
        else{
            echo "nooooooo" ;
        }
        
        
        
 ?>