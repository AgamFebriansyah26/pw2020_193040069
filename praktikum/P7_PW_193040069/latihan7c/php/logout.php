<?php
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash','', time() - 3600);
header("Location: ../index.php");
die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>