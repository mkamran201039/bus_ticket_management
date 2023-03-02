<?php

include 'dbconfig.php';


if(isset($_POST['deleteid']))
{
    $id=$_POST['deleteid'];
  
    $sql="delete from ticket_booking where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo " <script> 
         alert(' deleted successfully ');
        </script>    ";

        
    }
}




mysqli_close($conn);

?>