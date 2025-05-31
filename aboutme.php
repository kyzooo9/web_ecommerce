<?php

 require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>
<!DOCTYPE html>
<html>
  <head>
    <div class="title" title="camera recomendation"></div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  
    
  </head>
  <body>
    
  <nav>
      <div class="nav">
        <img id="logo" src="image/logo.jpg" onclick="location.href='home.php';" src="IMAGE/logo.jpg" style="height: 50px;"/>
        <a id="menu" href="home.php"><b>HOME</b></a>
        <a id="menu" href="index.php"><b>KAMERA</b></a>
        <a id="menu" href="equipment.php"><b>EQUIPMENT</b></a>
        <a id="menu" href="aboutme.php"><b>ABOUT ME</b></a>
        <a id="menu" href="cart.php"><b>CART</b><span id="badge"><?php echo mysqli_num_rows($all_cart); ?></span></a>

       
      </div>
    </nav>
    <div class="content">
      <h1>About Me</h1>
      <img
        class="profile-image"
        src="your-profile-image.jpg"
        alt="Profile Image"
      />
      <p>
        HALLO
      </p>
    </div>
  </body>
</html>
