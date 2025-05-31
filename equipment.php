<?php
   require_once 'connection.php';

   $sql="SELECT * FROM product"  ;
   $all_product= $conn->query($sql);
   $sql_cart = "SELECT * FROM cart";
   $all_cart = $conn->query($sql_cart); 
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Equipment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="equipment.css" />
</head>
<body>
    
    <nav>
    <div class="nav">
        <img id="logo" src="image/logo.jpg" onclick="location.href='home.php';" src="IMAGE/logo.jpg" style="height: 50px;"/>
        <a id="menu" href="home.php"><b>HOME</b></a>
        <a id="menu" href="index.php"><b>CAMERA</b></a>
        <a id="menu" href="equipment.php"><b>EQUIPMENT</b></a>
        <a id="menu" href="aboutme.php"><b>ABOUT ME</b></a>
        <a id="menu" href="cart.php"><b>CART</b>
        <span id="badge">
      
            
        <?php echo mysqli_num_rows($all_cart); ?></span></a>

        <a id="menu" ><b> </b>
        <span id="totalprice">
      
            
       </span></a>

        <a id="menu1" href="login-new.php" id="login" role="button" >
          <b>LOGIN</b> 
         </a>
      </div>
    </nav>
    
    <div id="main1-content">
        <a style="font-size: 510%; padding-left: 0%; padding-bottom: 0; padding-top: 5%;"><b>EQUIPMENT</b></a>
        <div id="textcontent" style="padding: 5%; padding-top: 0%;">
            <div id="main1-content">
                <div id="textcontent">
                    <main>
                        <?php
                        while ($row = mysqli_fetch_assoc($all_product)) {
                        ?>
                        <div class="container">
                        <div class="col-sm-6">
                              <div class="card">
                                   <div class="image">
                                  <img src="<?php echo $row['product_image']; ?>" alt="">
                                  </div>
                                   <div class="caption">
                                       <p class="product_name"><?php echo $row['product_name']; ?></p>
                                     <p class="price"><b>Rp<?php echo number_format($row['price']); ?> </b></p>
                                    <button class="add" data-id="<?php echo $row["product_id"]; ?>">Add to Cart</button>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script>
        var product_id = document.getElementsByClassName("add");
        for (var i = 0; i < product_id.length; i++) {
            product_id[i].addEventListener("click", function (event) {
                var target = event.target;
                var id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        var data = JSON.parse(this.responseText);
                        console.log("json di bawah");
                        console.log(data);
                        target.innerHTML = data.in_cart;
                        document.getElementById("badge").innerHTML = data.num_cart + 0;
                        var price =  data.total_price
                        document.getElementById("totalprice").innerHTML = price.toLocaleString("en-US");
                    }
                }
                xml.open("GET", "connection.php?id="+id, true);
                xml.send();
            })
        }
    </script>
</body>
</html>
