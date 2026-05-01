<?php include '../config/koneksi.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Data Produk</h2>

<a href="tambah_produk.php">+ Tambah Produk</a>

<table>
<tr>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td>
        <img src="../assets/img/<?= $d['gambar']; ?>" width="80">
    </td>
    <td><?= $d['nama_buah']; ?></td>
    <td><?= $d['kategori']; ?></td>
    <td>Rp <?= number_format($d['harga']); ?></td>
    <td><?= $d['stok']; ?></td>
</tr>
<?php } ?>
</table>
</div>