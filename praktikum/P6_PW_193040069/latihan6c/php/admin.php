<?php
require 'functions.php';
$musik = query ("SELECT * FROM musik");
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
<br>
    <table border="1" cellpadding ="10" cellspacing="0">
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
    <?php foreach ($musik as $b) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href="hapus.php?id=<? $musik['id'] ?>" onclick="return confirm('Hapus Data?')<button>Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $b['gambar']; ?>" alt=""></td>
            <td><?= $b['nama_alat_musik']; ?></td>
            <td><?= $b['asal']; ?></td>
            <td><?= $b['tahun_ditemukan']; ?></td>
            <td><?= $b['cara_dimainkan']; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>