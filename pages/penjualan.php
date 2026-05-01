<?php include '../config/koneksi.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Transaksi Penjualan</h2>

<form action="../proses/tambah_penjualan.php" method="POST">

Tanggal:
<input type="date" name="tanggal"><br><br>

Pilih Buah:
<select name="produk">
<?php
$data = mysqli_query($conn, "SELECT * FROM produk");
while($d = mysqli_fetch_array($data)){
?>
<option value="<?= $d['id']; ?>">
    <?= $d['nama_buah']; ?>
</option>
<?php } ?>
</select><br>

Jumlah:
<input type="number" name="jumlah"><br><br>

<button type="submit">Simpan</button>
</form>
</div>

<?php
include '../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$id_produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

$produk = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM produk WHERE id='$id_produk'"));

$subtotal = $produk['harga'] * $jumlah;

mysqli_query($conn, "INSERT INTO penjualan VALUES('', '$tanggal', '$subtotal')");

$id_penjualan = mysqli_insert_id($conn);

mysqli_query($conn, "INSERT INTO detail_penjualan VALUES('', '$id_penjualan', '$id_produk', '$jumlah', '$subtotal')");

mysqli_query($conn, "UPDATE produk SET stok = stok - $jumlah WHERE id='$id_produk'");

header("Location: ../pages/laporan.php");
?>