<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_pelanggan = $_POST['kd_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nomor_pelanggan = $_POST['nomor_pelanggan'];

    function tambah_pelanggan($koneksi, $kd_pelanggan, $nama_pelanggan, $nomor_pelanggan) {
        $sql = "INSERT INTO `pelanggan`(`Kd_Pelanggan`, `Nama_Pelanggan`, `Nomor_pelanggan`) VALUES ('$kd_pelanggan', '$nama_pelanggan', '$nomor_pelanggan')";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    tambah_pelanggan($koneksi, $kd_pelanggan, $nama_pelanggan, $nomor_pelanggan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
