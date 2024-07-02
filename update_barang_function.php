<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kdBarang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $hargaBarang = $_POST['harga_barang'];
    $satuan = $_POST['satuan'];

    function update_barang($koneksi, $kdBarang, $nama_barang, $hargaBarang, $satuan) {
        $sql = "UPDATE `barang` SET `nama_barang`='$nama_barang',`harga_Barang`='$hargaBarang', `satuan`='$satuan' WHERE `kd_barang` = '$kdBarang'";
        $result = $koneksi->query($sql);
        if($result){
            echo "\n Success \n $sql \n $result";
        } else {
            echo "Gagal";
        }
    }

    update_barang($koneksi, $kdBarang, $nama_barang, $hargaBarang, $satuan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
