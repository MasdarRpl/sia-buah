<?php
include '../config/koneksi.php';

$nama     = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga    = $_POST['harga'];
$stok     = $_POST['stok'];

// upload gambar
$nama_file = time() . '_' . $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

$folder = "../assets/img/";

if (!is_dir($folder)) {
    mkdir($folder);
}

move_uploaded_file($tmp, $folder . $nama_file);

// 🔥 FIX DI SINI (PAKAI NAMA KOLOM)
mysqli_query($conn, "INSERT INTO produk 
(nama_buah, kategori, harga, stok, gambar) 
VALUES ('$nama', '$kategori', '$harga', '$stok', '$nama_file')");

header("Location: ../pages/produk.php");
?>