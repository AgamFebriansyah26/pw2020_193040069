<?php

require 'functions.php';
$alatmusik = query("SELECT * FROM alat_musik");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Alat Musik</th>
      <th>Jenis</th>
      <th>Asal</th>
      <th>Tahun Ditemukan</th>
      <th>Warna</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($alatmusik as $musik) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $musik['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
        </td>
        <td><img src="../assets/img/<?= $musik['gambar']; ?>" alt=""></td>
        <td><?= $musik['nama_alatmusik']; ?></td>
        <td><?= $musik['jenis']; ?></td>
        <td><?= $musik['asal']; ?></td>
        <td><?= $musik['tahun_ditemukan']; ?></td>
        <td><?= $musik['warna']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>