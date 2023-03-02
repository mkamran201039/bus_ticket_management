
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD operation from scratch</title>
</head>
<body>


<div class="container" style="margin-top:50px">

   <button class="btn btn-primary" ><a href="booking_input.php" style="color:white;text-decoration:none">Add booking</a></button>
   <button class="btn btn-danger" ><a href="cancel_input.php" style="color:white;text-decoration:none">Cancel booking</a></button>
   <br><br>

   <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Appt Date</th>
      <th scope="col">From Location</th>
      <th scope="col">To location</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'dbconfig.php';
$name=$_POST['name'];
$sql="select * from ticket_booking where name='$name' ";
$result=mysqli_query($conn,$sql);
if($result){
   while( $row=mysqli_fetch_assoc($result)){

        $id=$row['id'];
        $name=$row['name'];
        $appt_date=$row['appt_date'];
        $from_location=$row['from_location'];
        $to_location=$row['to_location'];
        $status=$row['status'];

        echo '<tr>
        <th>'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$appt_date.'</td>
        <td>'.$from_location.'</td>
        <td>'.$to_location.'</td>
        <td>'.$status.'</td>
       
        </tr>';


   }
}


?>


  

  </tbody>
</table>


        
</div>



    
</body>
</html>