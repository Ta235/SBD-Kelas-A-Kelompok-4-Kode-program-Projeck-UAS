<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_invoice = $_POST['kd_invoice'];

    function showMessage($koneksi, $kd_invoice) {
        $sql = "DELETE FROM `transaksi` WHERE kd_invoice = '$kd_invoice'";
        $result = $koneksi->query($sql);
        if($result){
            echo " Success\n$kd_invoice\n$sql";
        } else {
            echo " Gagal";
        }
    }

    showMessage($koneksi, $kd_invoice);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
