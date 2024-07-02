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

$sql = "INSERT INTO transaksi (Kd_Invoice, Kd_Pelanggan, Kd_Barang, Kd_Staff, Kd_Jasa, Tanggal_Beli, Jumlah, Harga) VALUES ('$kd_invoice', '$kd_pelanggan', '$kd_barang', '$kd_staff', '$kd_jasa', '$tanggal_beli', '$jumlah', '$harga')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
