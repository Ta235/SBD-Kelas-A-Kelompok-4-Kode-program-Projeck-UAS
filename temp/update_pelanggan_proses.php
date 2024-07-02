<?php
include 'koneksi.php';

$kd_pelanggan = $_POST['kd_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_pelanggan = $_POST['nomor_pelanggan'];

$sql = "UPDATE pelanggan SET Nama_Pelanggan='$nama_pelanggan', Nomor_pelanggan='$nomor_pelanggan' WHERE Kd_Pelanggan='$kd_pelanggan'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
