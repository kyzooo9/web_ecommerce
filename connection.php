<?php
session_start();
$servername = "localhost";
$username_ = "root";
$password_ = "";
$database_name = "addtocart";

// Membuat koneksi
$conn = new mysqli($servername, $username_, $password_, $database_name);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inisialisasi keranjang belanja
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Hapus item dari database jika parameter `cart_id` tersedia
if (isset($_GET["cart_id"])) {
    $cart_id = intval($_GET["cart_id"]); // Pastikan tipe data aman
    $stmt = $conn->prepare("DELETE FROM cart WHERE product_id = ?");
    $stmt->bind_param("i", $cart_id);

    if ($stmt->execute()) {
        echo "Removed";
        exit; // Akhiri skrip setelah penghapusan berhasil
    } else {
        echo "Error removing item";
        exit;
    }
}

// Menambahkan item ke keranjang
if (isset($_GET["id"])) {
    $product_id = intval($_GET["id"]); // Pastikan tipe data aman

    // Periksa apakah produk sudah ada di keranjang
    $stmt = $conn->prepare("SELECT * FROM cart WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $in_cart = "already in cart";
    } else {
        // Tambahkan produk ke keranjang
        $insert = $conn->prepare("INSERT INTO cart (product_id) VALUES (?)");
        $insert->bind_param("i", $product_id);

        if ($insert->execute()) {
            $in_cart = "added into cart";
        } else {
            echo json_encode(["error" => "Failed to insert product into cart"]);
            exit;
        }
    }

    // Hitung total jumlah item dalam keranjang dan total harga
    $total_cart = "SELECT b.price FROM cart a, product b WHERE a.product_id = b.product_id";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);
    $totalPrice = 0;

    while ($row = $total_cart_result->fetch_assoc()) {
        $totalPrice += (int)$row["price"];
    }

    // Kirimkan respons dalam format JSON
    echo json_encode(["num_cart" => $cart_num, "in_cart" => $in_cart, "total_price" => $totalPrice]);
    exit;
}
?>
