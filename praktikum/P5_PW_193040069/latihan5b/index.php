<?php 

    require 'php/functions.php';

    $alatmusik = query("SELECT*FROM musik")
?>

<html>
    <head>
        <title>Latihan5b_193040069</title>
        <link rel="stylesheet" href="css/styleB.css" type="text/css">
    </head>
    <body>
        <h1>Alat Musik</h1>
        <center>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Alat Musik</th>
                <th>Asal</th>
                <th>Tahun Ditemukan</th>
                <th>Cara Dimainkan</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($alatmusik as $b) : ?>
            <tr>
                <?php $i ?>
                <td><?= $b["id"]; ?></td>
                <td><img src="assets/img/<?= $b["gambar"]; ?>"></td>
                <td><?= $b["nama_alat_musik"]; ?></td>
                <td><?= $b["asal"]; ?></td>
                <td><?= $b["tahun_ditemukan"]; ?></td>
                <td><?= $b["cara_dimainkan"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
		</center>
    </body>
</html>