<?php
$conn = new mysqli("localhost", "root", "", "crud_flutter");
$id = $_POST["id"];
$nik = $_POST["nik"];
$nama_warga = $_POST["nama_warga"];
$alamat = $_POST["alamat"];
$query = mysqli_query($conn, "UPDATE datawarga SET nik='$nik', nama_warga='$nama_warga', alamat='$alamat' WHERE id='$id'");
if ($query) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}
