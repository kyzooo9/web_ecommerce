<?php

 require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>
<!DOCTYPE html>
<html>
<head>
    <title>equipment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="header.css" />

    
</head>
<body>
<nav>
      <div class="nav">
        <img id="logo" src="image/logo.jpg" onclick="location.href='home.php';" src="image/logo.jpg" style="height: 50px; width: 70spx;"/>
        <a id="menu" href="home.php"><b>HOME</b></a>
        <a id="menu" href="index.php"><b>CAMERA</b></a>
        <a id="menu" href="equipment.php"><b>EQUIPMENT</b></a>
        <a id="menu" href="aboutme.php"><b>ABOUT ME</b></a>
        <a id="menu" href="cart.php"><b>CART</b><span id="badge"><?php echo mysqli_num_rows($all_cart); ?></span></a>

        <a id="menu1" href="login-new.php" id="login" role="button" >
          <b>LOGIN</b> 
         </a>
      </div>
  </nav>
</body>
</html>