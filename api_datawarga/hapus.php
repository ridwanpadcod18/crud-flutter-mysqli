<?php
$conn = new mysqli("localhost", "root", "", "crud_flutter");
$nik = $_POST["nik"];
$query = mysqli_query($conn, "DELETE FROM datawarga WHERE nik='$nik'");
if ($query) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}
