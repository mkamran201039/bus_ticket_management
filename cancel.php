<?php

include 'dbconfig.php';


if(isset($_GET['deleteid']))
{
    
    $id=$_GET['deleteid'];
    $sql="delete from crud where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo " <script> 
         alert(' deleted successfully ');
        </script>    ";

         header('location:display.php');
    }
}




mysqli_close($conn);

?>