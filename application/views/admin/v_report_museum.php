<html><head>
<title></title>
</head><style type ="text/css"> td{padding :5px;}</style><body style="font-family:Times New Roman;font-size:12px">
<h2 align="center">Laporan Data Museum <?php foreach ($ket as $key){echo $key['kota'];} ?></h2><br><br>

<table border="1" style='border-collapse : collapse;'>
<tr>
<th>No</th>
<th>Nama Museum</th>
<th>Kota</th>
<th>Alamat</th>
<th>Telepon</th>
</tr>

<?php
$id = 1;
   foreach ($museum as $admin) : ?>
<tr>
<td> <?= $id++; ?> </td>
<td><?= $admin['nama'] ?></td>
<td><?= $admin['kota'] ?></td>
<td><?= $admin['alamat'] ?></td>
<td><?= $admin['telepon'] ?></td>
</tr>
<?php endforeach; ?>
</table>
<script type ="text/javascript">
window.print();
</script>
</body></html>