<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$musik = query("SELECT * FROM musik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
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
  <title>Ubah Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1521604784100-e0318b4b2bad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80)">
  <div class="container w-50 mb-5" style="background-color: white; margin-top:50px; padding:30px; box-shadow:0px 0px 3px rgba(0,0,0,0.7);">
    <h1 class="text-center">Form Ubah Data Alat Musik</h1>
    <form action="" method="POST">
      <input type="text" name="id" id="" value="<?= $musik['id']; ?>">
      <div class="form-group ">
        <label for="exampleInputEmail1">Gambar :</label>
        <input type="text" class="form-control" id="" name="gambar" required value="<?= $musik['gambar']; ?>">
      </div>
      <div class=" form-group">
        <label for="exampleInputPassword1">Nama Alat Musik :</label>
        <input type="text" class="form-control" id="" name="nama_alat_musik" required value="<?= $musik['nama_alat_musik']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Asal :</label>
        <input type="text" class="form-control" id="" name="asal" required value="<?= $musik['asal']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tahun Ditemukan :</label>
        <input type="text" class="form-control" id="" name="tahun_ditemukan" required value="<?= $musik['tahun_ditemukan']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Cara Dimainkan :</label>
        <input type="text" class="form-control" id="" name="cara_dimainkan" required value="<?= $musik['cara_dimainkan']; ?>">
      </div>
      <button type="submit" class="btn btn-danger float-right" name="ubah">Ubah</button>
      <a href="admin.php" class="btn btn-danger" style="text-decoration: none; color: white;">Kembali</a>
    </form>

</body>

</html>