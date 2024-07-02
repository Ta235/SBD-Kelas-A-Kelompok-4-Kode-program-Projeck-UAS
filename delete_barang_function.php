<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Kd_Barang = $_POST['Kd_Barang'];

    function showMessage($koneksi, $Kd_Barang) {
        $sql = "DELETE FROM `barang` WHERE Kd_Barang = '$Kd_Barang'";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi, $Kd_Barang);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
