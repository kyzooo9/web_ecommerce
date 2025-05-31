<?php
session_start();
$servername="localhost";
$username_ = "root";
$password_ = "";
$database_name = "addtocart";

$conn = mysqli_connect($servername, $username_, $password_, $database_name);
 

$sql = "DELETE FROM cart" ;
header("location:equipment.php");
if ($conn->query($sql) === TRUE) {
    
}


 
?>