<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
  }
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
  <h3>Form Tambah Data Alat Musik</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required><br></br>
      </li>
      <li>
        <label for="nama_alatmusik">Nama Alat Musik :</label>
        <input type="text" name="nama_alatmusik" id="nama_alatmusik" required><br></br>
      </li>
      <li>
        <label for="asal">Asal :</label>
        <input type="text" name="asal" id="asal" required><br></br>
      </li>
      <li>
        <label for="tahun_ditemukan">Tahun Ditemukan :</label>
        <input type="text" name="tahun_ditemukan" id="tahun_ditemukan" required><br></br>
      </li>
      <li>
        <label for="cara_dimainkan">Cara Dimainkan :</label>
        <input type="text" name="cara_dimainkan" id="cara_dimainkan" required><br></br>
      </li>

    </ul>
    <button type="submit" name="tambah">Tambah Data!</button>
    <button type="sumbit"><a href="index.php" style="text-decoration: none; color: black;">Kembali</a></button>
  </form>
</body>

</html>