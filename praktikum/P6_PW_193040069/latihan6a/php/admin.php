<?php

require 'functions.php';
$alatmusik = query("SELECT * FROM musik");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Alat Musik</th>
      <th>Asal</th>
      <th>Tahun Ditemukan</th>
      <th>Cara Dimainkan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($alatmusik as $musik) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $musik['gambar']; ?>" alt=""></td>
        <td><?= $musik['nama_alat_musik']; ?></td>
        <td><?= $musik['asal']; ?></td>
        <td><?= $musik['tahun_ditemukan']; ?></td>
        <td><?= $musik['cara_dimainkan']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>