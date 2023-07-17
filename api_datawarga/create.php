<?php
$conn = new mysqli("localhost", "root", "", "crud_flutter");
$nik = $_POST["nik"];
$nama_warga = $_POST["nama_warga"];
$alamat = $_POST["alamat"];
$query = mysqli_query($conn, "INSERT INTO datawarga SET nik = '$nik', nama_warga = '$nama_warga', alamat = '$alamat'");
if ($query) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}
