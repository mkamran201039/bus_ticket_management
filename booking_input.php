

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>booking input</title>
</head>
<body>


<div class="container" style="margin-top:50px">

<form action="booking.php" method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">

  </div> 



  <div class="form-group">
    <label for="exampleInputEmail1">Appt date</label>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="appt date" name="appt_date">

  </div> 



  <div class="form-group">
    <label for="exampleInputEmail1">From Location</label>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="From Location" name="from_location">

  </div> 



  <div class="form-group">
    <label for="exampleInputEmail1">To Location</label>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="To location" name="to_location">

  </div> 

 
  <button type="submit" class="btn btn-primary" name="submit">Book</button>
</form>



        
</div>



    
</body>
</html>