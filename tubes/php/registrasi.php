<?php
require 'functions.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Daftar Akun</title>
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80)">
  <div class="container w-50" style="background-color: white; margin-top:50px; padding:30px; box-shadow:0px 0px 3px rgba(0,0,0,0.7);">
    <h1 class="text-center">DAFTAR AKUN</h1>
    <form action="" method="POST">
      <div class="form-group ">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" id="" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="" name="password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="" name="remember">
        <label class="form-check-label" for="remember">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-danger" name="register">Daftar</button>
    </form>
</body>

</html>