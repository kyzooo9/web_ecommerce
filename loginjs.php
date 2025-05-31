<!DOCTYPE html>
<html>
<head>
<style>

body {
  background-image: url("https://cdn3.emoji.gg/emojis/2078-herta-kurukuru.gif");
  background-repeat:no-repeat;
  background-position:center;
  background-size:cover;
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>
<body>

<h1 style="text-align:center;color:white;">Form Login</h1>

 <h3 style="font-family:serif";>email</h3>
<div id="form"class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<h3 style="font-family:serif";>password</h3>
<div  class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
 </body>
  <div style="text-align:center;color:blue;" class="d-grid gap-2 col-6 mx-auto">
  <button id="btnlogin" class="btn btn-primary" type="login">Login</button>
  
  <div id="modalb" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">gagal login</h5>
        
      </div>
      <div class="modal-body">
        <p>password yang anda masukkan salah.</p>
      </div>
      <div id="closebtn"class="modal-footer">
        <button id= "closebtna" type="button" >close</button>
      </div>
    </div>
  </div>
</div>
</body>



</html>

<script>

$('#closebtna').click(function () {
$('#modala').hide();
return false;
});
$('#closebtna').click(function () {
$('#modalb').hide();
});

$('#btnlogin').on('click', function(){
var password = document.getElementById('floatingPassword').value;
var email = document.getElementById('floatingInput').value;
	if (password == "limabenua" && email=="limabenua@gmail.com"){
		$('#modala').show();
		
	}
	else{
	$('#modalb').show();

	}
});
</script>
