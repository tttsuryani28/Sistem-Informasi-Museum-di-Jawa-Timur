<html><head>
<title></title>
</head><style type ="text/css"> td{padding :5px;}</style><body style="font-family:Times New Roman;font-size:12px">
<h2 align="center">Laporan Data Koleksi <?php foreach ($ket as $key){echo $key['kategori'];} ?></h2><br><br>

<table border="1" style='border-collapse : collapse;'>
<tr>
<th>No</th>
<th>Museum</th>
<th>Nama</th>
<th>Kategori</th>
<th>Deskripsi</th>
<th>Tanggal Masuk</th>
</tr>

<?php
$id = 1;
   foreach ($koleksi as $admin) : ?>
<tr>
<td> <?= $id++; ?> </td>
<td><?= $admin['museum'] ?></td>
<td><?= $admin['nama'] ?></td>
<td><?= $admin['kategori'] ?></td>
<td><?= $admin['deskripsi'] ?></td>
<td><?= $admin['tanggal_masuk'] ?></td>
</tr>
<?php endforeach; ?>
</table>
<script type ="text/javascript">
window.print();
</script>
</body></html>