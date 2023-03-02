<?php

include 'dbconfig.php';


if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $appt_date=$_POST['appt_date'];
    $from_location=$_POST['from_location'];
    $to_location=$_POST['to_location'];

    $sql="insert into ticket_booking (name,appt_date,from_location,to_location) values( '$name','$appt_date','$from_location','$to_location'); ";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo " <script> 
         alert(' inserted successfully ');
        </script>    ";

        // header('location:display.php');
    }
}




mysqli_close($conn);

?>