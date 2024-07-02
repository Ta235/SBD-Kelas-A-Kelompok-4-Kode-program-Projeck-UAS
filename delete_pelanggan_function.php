<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Kd_Pelanggan = $_POST['Kd_Pelanggan'];

    function showMessage($koneksi, $Kd_Pelanggan) {
        $sql = "DELETE FROM `pelanggan` WHERE Kd_Pelanggan = '$Kd_Pelanggan'";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi, $Kd_Pelanggan);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
