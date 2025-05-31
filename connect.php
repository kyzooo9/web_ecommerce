<?php 
$servername="localhost";
$username_="root";
$password_="";
$database_name="login_form";

$coon=mysqli_connect($servername,$username_,$password_,$database_name);
  if(!$coon)
{
	 die("Connection Failed:" . mysqli_connect_error());
}
    echo " ";
    
    ?>