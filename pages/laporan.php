<?php include '../config/koneksi.php'; ?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
<h2>Laporan Penjualan</h2>

<table>
<tr>
    <th>Tanggal</th>
    <th>Total</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM penjualan");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['tanggal']; ?></td>
    <td><?= $d['total']; ?></td>
</tr>
<?php } ?>
</table>
</div>