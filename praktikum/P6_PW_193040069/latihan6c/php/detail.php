<?php

if (!isset($_GET['id'])) {
    header("location: ../ index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$b = query("SELECT * FROM musik WHERE id = $id")[0];
?>

<html>

<head>
    <title>Latihan6c</title>
</head>

<body>
    <center>
        <h1>Alat Musik</h1>
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $b["gambar"]; ?>" alt="">
            </div>
            <div class="keterangan">
                <p>Nama Alat Musik :<?= $b["nama_alat_musik"]; ?></p>
                <p>Asal : <?= $b["asal"]; ?></p>
                <p>Tahun ditemukan : <?= $b["tahun_ditemukan"]; ?></p>
                <p>Cara Dimainkan : <?= $b["cara_dimainkan"]; ?></p>
            </div>

            <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
    </center>
</body>

</html>