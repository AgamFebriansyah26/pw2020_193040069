<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$musik = query("SELECT * FROM musik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Alat Musik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1526857508893-05ed3f2c4755?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80)">
    <center>
        <div class="container w-50 mt-5" style="background-color: white; padding:30px; box-shadow: 0px 0px 5px rgba(0,0,0, 0.7);">
            <h1>Alat Musik</h1>
            <div class="gambar">
                <img src="../assets/img/<?= $musik["gambar"]; ?>" alt="">
            </div>
            <div class="keterangan">
                <p>Nama Alat Musik :<?= $musik["nama_alat_musik"]; ?></p>
                <p>Asal : <?= $musik["asal"]; ?></p>
                <p>Tahun ditemukan : <?= $musik["tahun_ditemukan"]; ?></p>
                <p>Warna : <?= $musik["cara_dimainkan"]; ?></p>
            </div>

            <a href="../index.php" class="btn btn-danger">Kembali</a>
        </div>
    </center>
</body>

</html>