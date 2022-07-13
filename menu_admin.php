<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Gagal terhubung ke database: " . $conn->connect_error);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>TUGAS 3 DKP (Aprimivi Manda)</title>
</head>

<body>
<div class="container-fixed sticky-top">
    <nav class="navbar navbar-dark" style="background-color:#e76c13;">
    <div class="container-fluid">
    <a class="navbar-brand">
    <img src="https://i.ibb.co/fq3mfTs/Seek-Png-com-cinta-vector-png-3807393.png" width="45px" height="39px">MENU ADMIN DATABASE</a>
    </nav>
    <ul class="nav nav-tabs" style="background-color:white;">
    <li class="nav-item">
    <a class="nav-link" href="index.php">BERANDA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="menu_admin.php">TAMBAH DATA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="menu_edit_data.php">EDIT DATA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="menu_hapus_data.php">HAPUS DATA</a>
    </li>
    </ul>
    </div>
</div>

<form action="action_crud.php" id="insert" method="POST">
    <div class="container-fluid">
    <div class="mt-5 mb-3" style="max-width: 540px;">
    <label for="InputName" class="form-label">Nama</label>
    <input type="text" class="form-control" name="InputName">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputNIM" class="form-label">NIM</label>
    <input type="number" class="form-control" name="InputNIM">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputWA" class="form-label">Nomor WhatsApp</label>
    <input type="number" class="form-control" name="InputWA">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputIG" class="form-label">Nama Instagram</label>
    <input type="text" class="form-control" name="InputIG">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputHobi" class="form-label">Hobi Anda</label>
    <input type="text" class="form-control" name="InputHobi">
    </div>
    <div class="mb-5" style="max-width: 540px;">
    <label for="InputDosen" class="form-label">Dosen Pembimbing</label>
    <input type="text" class="form-control" name="InputDosen">
    </div>
    <button type="submit" form="insert" name="insert" class="btn btn-primary mb-5">TAMBAHKAN</button>
    </div>
</form>

<p class="card-text mb-auto fixed-bottom"><small class="text-muted">LocalHost Version</small></p>
</body>
</html>