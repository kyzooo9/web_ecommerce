<?php

 require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cart.css" />
</head>
<body>
    <?php include_once 'header.php'; ?>
    <main>
        <h1><?php echo mysqli_num_rows($all_cart) ?> items</h1>
        <hr>
        <?php
        while ($row_cart = mysqli_fetch_assoc($all_cart)) {
            $sql = "SELECT * FROM product WHERE product_id=" . $row_cart["product_id"];
            $all_product = $conn->query("$sql");
            while ($row = mysqli_fetch_assoc($all_product)) {
        ?>
                <div class="card"id="card">
                    <div class="images">
                        <img src="<?php echo $row["product_image"]; ?>" alt="">
                    </div>
                    <div class="caption">
                        <p class="product_name"><?php echo $row["product_name"]; ?></p>
                        <p class="price"><b>Rp.<?php echo number_format ($row["price"]); ?></b></p>
                        <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove from Cart</button>
              </div>
                </div>
                    </div>
        <?php
            }
        }
        ?>
        <div class="container">
            <div class="cards">
            <h4 class="total-title" style="padding-left: 15px; padding-top :17%;font-size: 40px; color:white;">Total = </h4>
            <h5 class="total-price" style="padding-left: 15px;font-size: 27px; color:white; ">
           <div id="total-price">Rp<?php 
                    $total_cart = "SELECT * FROM cart a, product b WHERE a.product_id=b.product_id";
                    $total_cart_result = $conn->query($total_cart);
                
                $totalPrice =0;
                    while($row= mysqli_fetch_assoc($total_cart_result)){
                        $totalPrice=$totalPrice+(int)$row["price"];
                
                    }
                    echo number_format($totalPrice, 0); ?></div>
        </h5>
        <form name="order-detail" id="order-details" action="connectadmin.php" method="post">
            <div class="form-group" style=" padding-right: 15px;color:white;">
                <label for="email-input">Email Address</label>                        
                <input type="email" class="form-control" id="email-input" placeholder="Email" name="email-inputs">
                </div>
                <div class="form-group" style=" padding-right: 15px;color:white;">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name-inputs">
                </div>
            </form>
                <div>
                <div id="btn" class="checkOut">
                <button type="submit" class="btn-order"data-id2="<?php echo $row["product_id"]; ?>" name = "save"value="submit">BUY</button>
                </div>
                </div>
            </div>
        </div>
    </main>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <script>
       
       document.querySelectorAll(".remove").forEach(function (button) {
        button.addEventListener("click", function (event) {
            var target = event.target;
            var cart_id = target.getAttribute("data-id");
            
            // Membuat objek XMLHttpRequest
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (this.readyState === 4) {
                    if (this.status === 200) {
                        // Berhasil, ubah tampilan tombol
                        target.innerHTML = this.responseText || "Removed";
                        target.style.opacity = 0.3;
                        target.disabled = true; // Nonaktifkan tombol
                    } else {
                        // Gagal, tampilkan pesan kesalahan
                        alert("Failed to remove item from cart. Please try again.");
                    }
                }
            };

            // Kirim permintaan GET
            xml.open("GET", "connection.php?cart_id=" + encodeURIComponent(cart_id), true);
            xml.send();
        });
    });
        
    var purchaseButton = document.getElementsByClassName('btn-order')[0];
    purchaseButton.addEventListener('click', purchase);
    function purchase(event){
    var btnClick = event.target;
    console.log(btnClick);
    console.log(purchaseButton);
    var cartItems = document.getElementsByClassName('card')[0];
    var email = document.forms["order-detail"]["email-inputs"].value;
    var name = document.forms["order-detail"]["name-inputs"].value;
    if (email == ""){
        alert("EMAIL IS EMPTY!");
        return null;
    }
    if (name == ""){
        alert("NAME IS EMPTY!");
        return null;
    }
    if (cartItems.hasChildNodes() == false){
        alert("NO ITEM IN CART");
        return null;
    }
    var product_id = document.getElementsByClassName("btn-order");
        for (var i = 0; i < product_id.length; i++) {
            product_id[i].addEventListener("click", function (event) {
                var target = event.target;
                var id = target.getAttribute("data-id2");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        var data = JSON.parse(this.responseText);
                        console.log("json di bawah");
                        console.log(data);
                        target.innerHTML = data.in_cart;
                      
                        
                    }
                }
                xml.open("GET", "connectadmin.php?id="+id, true);
                xml.send();
            })
        }
    if  (purchaseButton)onclick = function(){
        window.location.href="delete_cart.php";
    }   
    
    
    alert("THANK YOU FOR YOUR PURCHASE! YOU WILL BE CONTACTED LATER VIA EMAIL");
}








   
    </script>
</body>
</html>