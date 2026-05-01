<?php
$conn = mysqli_connect("localhost", "root", "", "");

// buat database otomatis
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS sia_buah");
mysqli_select_db($conn, "sia_buah");

// buat tabel otomatis
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_buah VARCHAR(100),
    kategori VARCHAR(50),
    harga INT,
    stok INT,
    gambar VARCHAR(255)
)");
?>