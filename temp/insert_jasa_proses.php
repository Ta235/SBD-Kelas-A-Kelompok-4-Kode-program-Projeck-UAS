<?php
include 'koneksi.php';

$kd_jasa = $_POST['kd_jasa'];
$nama_jasa = $_POST['nama_jasa'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];

$sql = "INSERT INTO jasa (Kd_Jasa, Nama_Jasa, Harga, Satuan) VALUES ('$kd_jasa', '$nama_jasa', '$harga', '$satuan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
