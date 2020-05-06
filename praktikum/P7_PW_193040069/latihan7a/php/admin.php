<?php

require 'functions.php';
$alatmusik = query("SELECT * FROM musik");

if (isset($_GET['cari'])) {
  $keyword = $_GET ['keyword'];
  $alatmusik = query("SELECT * FROM musik WHERE
               gambar LIKE '%$keyword%' OR
               nama_alat_musik LIKE '%$keyword%' OR
               asal LIKE '%$keyword%' OR
               tahun_ditemukan LIKE '%$keyword%' OR
               cara_dimainkan LIKE '%keyword%' ");
} else {
  $alatmusik = query("SELECT * FROM musik")
}

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
    <form action="" method="get">
      <input type="text" name="keywoard" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
  </div>
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
    <?php if (empty($alatmusik)) : ?>
          <tr>
            <td colspan="7">
              <h1>Data Tidak Ditemukan</h1>
            </td>
          </tr>
    <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($alatmusik as $musik) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $musik['id'] ?>"><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $musik['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
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