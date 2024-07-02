<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_Staff = $_POST['kd_Staff'];

    function showMessage($koneksi, $kd_Staff) {
        $sql = "DELETE FROM `staff` WHERE Kd_Staff = '$kd_Staff'";
        $result = $koneksi->query($sql);
        if($result){
            echo " Success\n$kd_Staff\n$sql";
        } else {
            echo " Gagal";
        }
    }

    showMessage($koneksi, $kd_Staff);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
