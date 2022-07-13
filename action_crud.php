<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
$conn = new mysqli($servername, $username, $password, $database);

if (isset($_POST['insert'])) {
$nama = $_POST['InputName'];
$nim = $_POST['InputNIM'];
$wa = $_POST['InputWA'];
$ig = $_POST['InputIG'];
$hobi = $_POST['InputHobi'];
$dosen = $_POST['InputDosen'];

$insert = "INSERT INTO data_user (Nama, NIM, WA, IG, Hobi, Dosen_PA)
VALUES ('$nama', '$nim', '$wa', '$ig', '$hobi', '$dosen')";

if ($conn->query($insert) === TRUE) {
    echo "<script>
    alert('Data berhasil ditambahkan!');
    document.location.href='menu_admin.php'
    </script>";
} else {
    echo "Terjadi kesalahan: " . $insert . "<br>" . $conn->error;
}
}

if (isset($_POST['update'])) {
$id_update = $_POST['getIDUpdate'];
$nama_update = $_POST['InputNameUpdate'];
$nim_update = $_POST['InputNIMUpdate'];
$wa_update = $_POST['InputWAUpdate'];
$ig_update = $_POST['InputIGUpdate'];
$hobi_update = $_POST['InputHobiUpdate'];
$dosen_update = $_POST['InputDosenUpdate'];
$update = "UPDATE data_user SET Nama='$nama_update', NIM='$nim_update', WA='$wa_update', IG='$ig_update', Hobi='$hobi_update', Dosen_PA='$dosen_update' WHERE id=$id_update";

if ($conn->query($update) === TRUE) {
    echo "<script>
    alert('Data berhasil di ubah!');
    document.location.href='menu_edit_data.php'
    </script>";
} else {
    echo "Terjadi kesalahan: " . $update . "<br>" . $conn->error;
}
}

if (isset($_POST['delete'])) {
$id_delete = $_POST['getIDDelete'];
$delete = "DELETE FROM data_user WHERE id='$id_delete'";
if ($conn->query($delete) === TRUE) {
    echo "<script>
    alert('Data berhasil dihapus!');
    document.location.href='menu_hapus_data.php'
    </script>";
} else {
    echo "Terjadi kesalahan: " . $delete . "<br>" . $conn->error;
}
}
?>