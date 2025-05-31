<?php

 require_once 'connectadmin.php';

 $sql="SELECT * FROM product"  ;
 $all_product= $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin_equipment.css" />
</head>
<body>
    <?php include_once 'header2.php'; ?>
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