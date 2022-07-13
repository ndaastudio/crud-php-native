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
    <img src="https://i.ibb.co/fq3mfTs/Seek-Png-com-cinta-vector-png-3807393.png" width="45px" height="39px">MENU ADMIN DATABASE</a>
    </nav>
    <ul class="nav nav-tabs" style="background-color:white;">
    <li class="nav-item">
    <a class="nav-link" href="index.php">BERANDA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="menu_admin.php">TAMBAH DATA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="menu_edit_data.php">EDIT DATA</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="menu_hapus_data.php">HAPUS DATA</a>
    </li>
    </ul>
    </div>
</div>

<div class="container-fluid table-responsive">
<table class="table mt-3 table-bordered border-primary">
<thead>
    <tr>
    <th scope="col">Nama</th>
    <th scope="col">NIM</th>
    <th scope="col">WhatsApp</th>
    <th scope="col">Instagram</th>
    <th scope="col">Hobi</th>
    <th scope="col">Dosen Pembimbing</th>
    <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php foreach($result as $r) { ?>
    <tr>
    <td><?php echo $r ['Nama'] ?></td>
    <td><?php echo $r ['NIM'] ?></td>
    <td><?php echo $r ['WA'] ?></td>
    <td><?php echo $r ['IG'] ?></td>
    <td><?php echo $r ['Hobi'] ?></td>
    <td><?php echo $r ['Dosen_PA'] ?></td>
    <td>
        <form action="form_edit_data.php" method="POST">
        <input type="hidden" name="getID" value="<?php echo $r['ID'] ?>">
        <button type="submit" class="btn btn-warning">EDIT DATA</button>
        </form>
    </td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>

<p class="card-text mb-auto fixed-bottom"><small class="text-muted">LocalHost Version</small></p>
</body>
</html>