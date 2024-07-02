<?php
include 'koneksi.php';

$kd_jasa = $_POST['kd_jasa'];
$nama_jasa = $_POST['nama_jasa'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];

$sql = "UPDATE jasa SET Nama_Jasa='$nama_jasa', Harga='$harga', Satuan='$satuan' WHERE Kd_Jasa='$kd_jasa'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
