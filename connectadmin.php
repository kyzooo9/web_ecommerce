<?php
session_start();
$servername="localhost";
$username_ = "root";
$password_ = "";
$database_name = "addtocart";

$conn = mysqli_connect($servername, $username_, $password_, $database_name);
if (isset($_GET["id"])) {
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE  product_id = $product_id";
    $result = $conn->query($sql);
    $total_cart = "SELECT * FROM cart a, product b WHERE a.product_id=b.product_id";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);
    $insert = "INSERT INTO dibeli(product_id) VALUES($product_id)";
}
?>