<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kdBarang = $_POST['kd_barang'];
    $namaBarang = $_POST['nama_barang'];
    $hargaBarang = $_POST['harga_barang'];
    $satuan = $_POST['satuan'];

    function showMessage($koneksi, $kdBarang, $namaBarang, $hargaBarang, $satuan) {
        $sql = "INSERT INTO `barang`(`Kd_barang`, `Nama_Barang`, `Harga_Barang`, `Satuan`) VALUES ('$kdBarang', '$namaBarang', '$hargaBarang', '$satuan')";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi, $kdBarang, $namaBarang, $hargaBarang, $satuan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
