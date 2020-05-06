<?php
require 'functions.php';

$id = $_GET['id'];
$alatmusik = query("SELECT * FROM alat_musik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal diubah!');
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
  <h3>Form Ubah Data Alat Musik</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required value="<?= $alatmusik['gambar']; ?>">
      </li>
      <li>
        <label for="nama_alat_musik">Nama Alat Musik :</label>
        <input type="text" name="nama_alat_musik" id="nama_alat_musik" required value="<?= $alatmusik['nama_alat_musik']; ?>">
      </li>
      <li>
        <label for="asal">Asal :</label>
        <input type="text" name="asal" id="asal" required value="<?= $alatmusik['asal']; ?>">
      </li>
      <li>
        <label for="tahun_ditemukan">Tahun Ditemukan :</label>
        <input type="text" name="tahun_ditemukan" id="tahun_ditemukan" required value="<?= $alatmusik['tahun_ditemukan']; ?>">
      </li>
      <li>
        <label for="cara_dimainkan">Cara Dimainkan :</label>
        <input type="text" name="cara_dimainkan" id="cara_dimainkan" required value="<?= $alatmusik['cara_dimainkan']; ?>">
      </li>

    </ul>
    <button type="submit" name="ubah">Ubah Data!</button>
    <button type="sumbit"><a href="index.php" style="text-decoration: none; color: black;">Kembali</a></button>
  </form>
</body>

</html>