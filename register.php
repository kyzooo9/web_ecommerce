<?php
session_start();
$servername="localhost";
$username_="root";
$password_="";
$database_name="login_form";

$coon=mysqli_connect($servername,$username_,$password_,$database_name);

if(!$coon)
{
	 die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
    $email=	$_POST['fname'];
	$username= $_POST['username'];
	$password=$_POST['password'];
	 
 $sql = "SELECT * FROM `email_password1` where `email` = '$email';";  
 $result=mysqli_query($coon,$sql);
 $present=mysqli_num_rows($result);
 if($present  > 0){  
            $_SESSION['email_alert']='1';
			header("Location:index.php");
}  
		else{
			$query = "INSERT INTO `email_password1`(username,password,email)
	     VALUES ('$username','$password','$email')";
		  $results=mysqli_query($coon,$query);
header("Location:login-new.php");
}
?>	