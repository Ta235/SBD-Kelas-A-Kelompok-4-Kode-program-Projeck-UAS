<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_jasa = $_POST['kd_jasa'];
    $nama_jasa = $_POST['nama_jasa'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];

    function showMessage($koneksi, $kd_jasa, $nama_jasa, $harga, $satuan) {
        $sql = "INSERT INTO `jasa`(`kd_jasa`, `Nama_jasa`, `Harga`, `Satuan`) VALUES ('$kd_jasa', '$nama_jasa', '$harga', '$satuan')";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi, $kd_jasa, $nama_jasa, $harga, $satuan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
