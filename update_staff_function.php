<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_staff = $_POST['kd_staff'];
    $nama_staff = $_POST['nama_staff'];
    $posisi = $_POST['posisi'];

    function update_staff($koneksi, $kd_staff, $nama_staff, $posisi) {
        $sql = "UPDATE `staff` SET `nama_staff`='$nama_staff',`posisi`='$posisi' WHERE `kd_staff` = '$kd_staff'";
        $result = $koneksi->query($sql);
        if($result){
            echo "\n Success ";
        } else {
            echo "Gagal";
        }
    }

    update_staff($koneksi, $kd_staff, $nama_staff, $posisi);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
