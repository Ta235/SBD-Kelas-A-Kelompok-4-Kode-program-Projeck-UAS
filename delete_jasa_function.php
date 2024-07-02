<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_jasa = $_POST['kd_jasa'];

    function showMessage($koneksi, $kd_jasa) {
        $sql = "DELETE FROM `jasa` WHERE kd_jasa = '$kd_jasa'";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi, $kd_jasa);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
