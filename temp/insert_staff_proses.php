<?php
include 'koneksi.php';

$kd_staff = $_POST['kd_staff'];
$nama_staff = $_POST['nama_staff'];
$posisi = $_POST['posisi'];

$sql = "INSERT INTO staff (Kd_Staff, Nama_Staff, Posisi) VALUES ('$kd_staff', '$nama_staff', '$posisi')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
