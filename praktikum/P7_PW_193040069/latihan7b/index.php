<?php

require 'php/functions.php';

$alatmusik = query("SELECT * FROM musik")
?>

<html>

<head>
    <title>Latihan6e</title>
    <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
</head>

<body background="assets/img/background.jpg">
    <center>
        <h1>Alat Musik</h1>
        <div class="container">
            <?php foreach ($alatmusik as $b) : ?>
                <P class="tipe">
                    <a href="php/detail.php?id=<?= $b['id'] ?>">
                        <?= $b["nama_alat_musik"] ?>
                    </a>
                    <a href="php/login.php">
                    <button type="">Masuk Ke halaman admin</button>
                    <a/>
                </P>
            <?php endforeach; ?>
        </div>
    </center>
</body>

</html>