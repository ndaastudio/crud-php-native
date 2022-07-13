<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Gagal terhubung ke database: " . $conn->connect_error);
}
    $id = $_POST['getID'];
    $detail = "SELECT * FROM data_user WHERE id='$id'";
    $result = $conn->query($detail);
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
    <img src="https://i.ibb.co/fq3mfTs/Seek-Png-com-cinta-vector-png-3807393.png" width="45px" height="39px">MENU EDIT DATABASE</a>
    </nav>
    </div>
</div>

<form action="action_crud.php" id="insert" method="POST">
    <div class="container-fluid">
    <?php foreach($result as $r) { ?>
    <div class="mt-4 mb-3" style="max-width: 540px;">
    <label for="InputName" class="form-label">Nama</label>
    <input type="text" class="form-control" name="InputNameUpdate" value="<?php echo $r ['Nama'] ?>">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputNIM" class="form-label">NIM</label>
    <input type="number" class="form-control" name="InputNIMUpdate" value="<?php echo $r ['NIM'] ?>">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputWA" class="form-label">Nomor WhatsApp</label>
    <input type="number" class="form-control" name="InputWAUpdate" value="<?php echo $r ['WA'] ?>">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputIG" class="form-label">Nama Instagram</label>
    <input type="text" class="form-control" name="InputIGUpdate" value="<?php echo $r ['IG'] ?>">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputHobi" class="form-label">Hobi Anda</label>
    <input type="text" class="form-control" name="InputHobiUpdate" value="<?php echo $r ['Hobi'] ?>">
    </div>
    <div class="mb-3" style="max-width: 540px;">
    <label for="InputDosen" class="form-label">Dosen Pembimbing</label>
    <input type="text" class="form-control" name="InputDosenUpdate" value="<?php echo $r ['Dosen_PA'] ?>">
    </div>
    <div class="mb-5">
    <form action="action_crud.php" method="POST">
    <input type="hidden" name="getIDUpdate" value="<?php echo $r['ID'] ?>">
    <button type="submit" name="update" class="btn btn-primary">SIMPAN DATA</button>
    </form>
    </div>
    <?php } ?>
    </div>
</form>

<p class="card-text mb-auto fixed-bottom"><small class="text-muted">LocalHost Version</small></p>
</body>
</html>