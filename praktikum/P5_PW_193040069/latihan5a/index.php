<?php 

    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "tubes") or die("Database Salah!");

    $result = mysqli_query($conn, "SELECT*FROM musik")
?>

<html>
    <head>
        <title>Latihan5a_193040069</title>
        <link rel="stylesheet" href="css/styleA.css" type="text/css">
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <?php $i ?>
                <td><?= $row["id"]; ?></td>
                <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["nama_alat_musik"]; ?></td>
                <td><?= $row["asal"]; ?></td>
                <td><?= $row["tahun_ditemukan"]; ?></td>
                <td><?= $row["cara_dimainkan"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
		</center>
    </body>
</html>