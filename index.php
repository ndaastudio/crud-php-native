<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Gagal terhubung ke database: " . $conn->connect_error);
  }
    $read = "SELECT * FROM data_user";
    $result = $conn->query($read);
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
    <img src="https://i.ibb.co/fq3mfTs/Seek-Png-com-cinta-vector-png-3807393.png" width="45px" height="39px">DATA MAHASISWA KELAS A INDRALAYA</a>
    </nav>
    <ul class="nav nav-tabs" style="background-color:white;">
    <li class="nav-item">
    <a class="nav-link active" href="index.php">BERANDA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="menu_admin.php">MENU ADMIN</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="https://aprimivimanda-database.000webhostapp.com/">ONLINE DATABASE</a>
    </li>
    </ul>
    </div>
</div>

<div class="container-fluid">
    <?php foreach($result as $r) { ?>
    <div class="card ml-4 mt-2 mb-2" style="max-width: 540px;">
    <div class="row g-0">
    <div class="m-auto col-md-4">
    <img src="https://i.ibb.co/gZ9Prjq/man.png" class="img-thumbnail rounded-start">
    </div>
    <div class="col-md-8">
    <div class="card-body">
    <h5 class="card-title"><?php echo $r ['Nama'] ?></h5>
    <div class="card-text">NIM: <?php echo $r ['NIM'] ?></div>
    <div class="card-text">WhatsApp: <?php echo $r ['WA'] ?></div>
    <div class="card-text">Instagram: <?php echo $r ['IG'] ?></div>
    <div class="card-text">Hobi: <?php echo $r ['Hobi'] ?></div>
    <p class="card-text mb-auto"><small class="text-muted">Dosen Pembimbing: <?php echo $r ['Dosen_PA'] ?></small></p>
    </div>
    </div>
    </div>
    </div>
    <?php } ?>
</div>

<p class="card-text mb-auto fixed-bottom"><small class="text-muted">LocalHost Version</small></p>
</body>
</html>