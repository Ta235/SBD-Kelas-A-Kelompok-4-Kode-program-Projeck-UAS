<?php
include 'koneksi.php';

$kd_staff = $_POST['kd_staff'];

$sql = "DELETE FROM staff WHERE Kd_Staff='$kd_staff'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
