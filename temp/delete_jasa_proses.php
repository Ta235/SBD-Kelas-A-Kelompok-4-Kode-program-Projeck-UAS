<?php
include 'koneksi.php';

$kd_jasa = $_POST['kd_jasa'];

$sql = "DELETE FROM jasa WHERE Kd_Jasa='$kd_jasa'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
