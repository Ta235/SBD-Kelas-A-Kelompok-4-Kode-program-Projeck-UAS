<?php
include 'koneksi.php';

$kd_invoice = $_POST['kd_invoice'];
$kd_pelanggan = $_POST['kd_pelanggan'];
$kd_barang = $_POST['kd_barang'];
$kd_staff = $_POST['kd_staff'];
$kd_jasa = $_POST['kd_jasa'];
$tanggal_beli = $_POST['tanggal_beli'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = "UPDATE transaksi SET Kd_Pelanggan='$kd_pelanggan', Kd_Barang='$kd_barang', Kd_Staff='$kd_staff', Kd_Jasa='$kd_jasa', Tanggal_Beli='$tanggal_beli', Jumlah='$jumlah', Harga='$harga' WHERE Kd_Invoice='$kd_invoice'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
