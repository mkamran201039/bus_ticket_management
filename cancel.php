<?php

include 'dbconfig.php';


<<<<<<< HEAD
if(isset($_GET['deleteid']))
{
    
    $id=$_GET['deleteid'];
    $sql="delete from crud where id=$id";
=======
if(isset($_POST['deleteid']))
{
    echo "here";
  
    $sql="delete from ticket_booking where id=$id";
>>>>>>> feature_2
    $result=mysqli_query($conn,$sql);

    if($result){
        echo " <script> 
         alert(' deleted successfully ');
        </script>    ";

<<<<<<< HEAD
         header('location:display.php');
=======
        
>>>>>>> feature_2
    }
}




mysqli_close($conn);

?>