<?php
include 'koneksi.php';

$kd_pelanggan = $_POST['kd_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_pelanggan = $_POST['nomor_pelanggan'];

$sql = "INSERT INTO pelanggan (Kd_Pelanggan, Nama_Pelanggan, Nomor_pelanggan) VALUES ('$kd_pelanggan', '$nama_pelanggan', '$nomor_pelanggan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
