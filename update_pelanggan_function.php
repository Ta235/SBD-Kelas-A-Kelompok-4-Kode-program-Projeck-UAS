<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_pelanggan = $_POST['kd_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nomor_pelanggan = $_POST['nomor_pelanggan'];

    function update_pelanggan($koneksi, $kd_pelanggan, $nama_pelanggan, $nomor_pelanggan) {
        $sql = "UPDATE `pelanggan` SET `Nama_Pelanggan`='$nama_pelanggan',`Nomor_pelanggan`='$nomor_pelanggan' WHERE `Kd_Pelanggan` = '$kd_pelanggan'";
        $result = $koneksi->query($sql);
        if($result){
            echo "\n Success ";
        } else {
            echo "Gagal";
        }
    }

    update_pelanggan($koneksi, $kd_pelanggan, $nama_pelanggan, $nomor_pelanggan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
