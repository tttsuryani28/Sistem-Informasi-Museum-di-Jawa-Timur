<html><head>
<title></title>
</head><style type ="text/css"> td{padding :5px;}</style><body style="font-family:Times New Roman;font-size:12px">
<h2 align="center">Laporan Data Pameran <?php foreach ($ket as $key){echo $key['kota'];} ?></h2><br><br>

<table border="1" style='border-collapse : collapse;'>
<tr>
<th>No</th>
<th>Nama Pameran</th>
<th>Kota</th>
<th>Lokasi</th>
<th>Tanggal Pameran</th>
</tr>

<?php
$id = 1;
   foreach ($pameran as $admin) : ?>
<tr>
<td> <?= $id++; ?> </td>
<td><?= $admin['nama_pameran'] ?></td>
<td><?= $admin['kota'] ?></td>
<td><?= $admin['alamat'] ?></td>
<td><?= $admin['tanggal_pameran'] ?></td>
</tr>
<?php endforeach; ?>
</table>
<script type ="text/javascript">
window.print();
</script>
</body></html>