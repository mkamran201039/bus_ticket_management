<?php
$servername = "localhost";
$database = "bus_ticket_management";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn) {
     echo "Connected successfully";
}
else
{
    echo "something wrong";
}



?>