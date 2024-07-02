<?php
include 'koneksi.php';

$kd_invoice = $_POST['kd_invoice'];

$sql = "DELETE FROM transaksi WHERE Kd_Invoice='$kd_invoice'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
