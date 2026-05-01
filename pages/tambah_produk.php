<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Tambah Produk</h2>

<form action="../proses/tambah_produk.php" method="POST" enctype="multipart/form-data">

Nama Buah
<input type="text" name="nama" required>

Kategori
<select name="kategori" required>
    <option value="">-- Pilih --</option>
    <option>Buah Lokal</option>
    <option>Buah Impor</option>
</select>

Harga
<input type="number" name="harga" required>

Stok
<input type="number" name="stok" required>

Gambar
<input type="file" name="gambar" required>

<button type="submit">Simpan</button>

</form>
</div>