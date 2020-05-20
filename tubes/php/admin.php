<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$musik = query("SELECT * FROM musik");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $musik = query("SELECT * FROM musik WHERE
               gambar LIKE '%$keyword%' OR
               nama_alat_musik LIKE '%$keyword%' OR
               asal LIKE '%$keyword%' OR
               tahun_ditemukan LIKE '%$keyword%' OR
               cara_dimainkan LIKE '%keyword%' ");
} else {
  $musik = query("SELECT * FROM musik");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1514649923863-ceaf75b7ec00?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80)">
  <div class="container mt-5 mb-5" style="background-color: white; margin-top:50px; padding:30px; box-shadow:0px 0px 3px rgba(0,0,0,0.7);">
    <div class="add float-right">
      <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
    </div>
    <div class="add">
      <a href="tambah.php"><button class="btn btn-danger">Tambah Data</button></a>
    </div>
    <form action="" method="GET" class="form-inline mb-3">
      <div class="form-group mx-auto mt-3">
        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari" autofocus>
        <button type="submit" name="cari" class="btn btn-danger">Cari!</button>
      </div>
    </form>
    <table border="0" cellpadding="13" cellspacing="0" class="table text-center">
      <tr class="bg-danger" style="color: white;">
        <th>#</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Nama Alat Musik</th>
        <th>Asal</th>
        <th>Tahun Ditemukan</th>
        <th>Cara Dimainkan</th>
      </tr>
      <?php if (empty($musik)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($musik as $msk) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $msk['id'] ?>"><button class="btn btn-danger">Ubah</button></a>
              <a href="hapus.php?id=<?= $msk['id'] ?>" onclick="return confirm('Hapus Data??')" class="btn btn-danger mt-2">Hapus</a>
            </td>
            <td><img src="../assets/img/<?= $msk['gambar']; ?>" alt=""></td>
            <td><?= $msk['nama_alat_musik']; ?></td>
            <td><?= $msk['asal']; ?></td>
            <td><?= $msk['tahun_ditemukan']; ?></td>
            <td><?= $msk['cara_dimainkan']; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>