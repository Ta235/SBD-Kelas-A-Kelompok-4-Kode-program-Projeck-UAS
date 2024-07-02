<?php
include 'koneksi.php';

$kd_staff = $_POST['kd_staff'];
$nama_staff = $_POST['nama_staff'];
$posisi = $_POST['posisi'];

$sql = "UPDATE staff SET Nama_Staff='$nama_staff', Posisi='$posisi' WHERE Kd_Staff='$kd_staff'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
