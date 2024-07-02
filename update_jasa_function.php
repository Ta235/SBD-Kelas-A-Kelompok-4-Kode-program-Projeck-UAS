<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_jasa = $_POST['kd_jasa'];
    $nama_jasa = $_POST['nama_jasa'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];

    function update_staff($koneksi, $kd_jasa, $nama_jasa, $harga, $satuan) {
        $sql = "UPDATE `jasa` SET `nama_jasa`='$nama_jasa',`harga`='$harga', `satuan`='$satuan' WHERE `kd_jasa` = '$kd_jasa'";
        $result = $koneksi->query($sql);
        if($result){
            echo "\n Success \n $sql \n $result";
        } else {
            echo "Gagal";
        }
    }

    update_staff($koneksi, $kd_jasa, $nama_jasa, $harga, $satuan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
