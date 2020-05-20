<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $musik = query("SELECT * FROM musik WHERE
                      nama_alat_musik LIKE '%$keyword%'");
} else {
    $musik = query("SELECT * FROM musik");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1525018923-1ebe8261a6a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1482&q=80)">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Agamusik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="php/login.php">Admin Page <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="" method="GET" class="form-inline mt-4">
            <div class="form-group mx-auto">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari" aria-describedby="">
                <button type="submit" class="btn btn-danger" name="cari">Cari!</button>
            </div>
        </form>
        <?php if (empty($musik)) : ?>
            <h1>Data tidak ditemukan</h1>
        <?php else : ?>

            <div class="row">
                <?php foreach ($musik as $msk) : ?>
                    <div class="col-lg-4">
                        <div class="card mt-4 text-center" style="width: 18rem;">
                            <img src="assets/img/<?= $msk['gambar']; ?>" class="card-img-top" alt="..." style="width: 250px; height: 250px; margin: auto; padding: auto;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $msk['nama_alat_musik']; ?></h5>
                            </div>
                            <div class="card-body">
                                <a href="php/detail.php?id=<?= $msk['id']; ?>" class="card-link">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>



    </div>
    <div class="footer mt-3 bg-danger p-3">
        <p class="text-center" style="margin: 0; color:white;">Credit Agam Febriansyah.</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>