<?php
session_start();
$massage='';
if(isset($_SESSION['email_alert'])){
	$massage='email sudah digunakan';
}
?>
<!DOCTYPE html>
<html>
<body>
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="syle_register.css"/>


</head>
<form action="register.php" method="post">
	<table border="1" align="center">
		<div class="container">
			<div class="title"><h1>Register</h1></div>
			<div class="title"><h6><?php echo $massage;?></h6></div>
			<h5>Masukkan Email</h5>
			<div class="form-floating mb-3">
			  <input type="email" name="fname" class="form-control" id="floatingInput" placeholder="name@example.com" required="">
			  <label for="floatingInput">Email address</label>
			</div>
			  
			</div>
			<h5>Masukkan Password</h5>
			<div class="form-floating">
			  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required="">
			  <label for="floatingPassword">Password</label>
			</div>
					<input type="submit" class="btn btn-primary"  name = "save" value="submit">
				  </div>
				</div>
			  </div>
			</div>
		</div><?php unset($_SESSION['email_alert']);?>
	</table>
</form>
</html>
