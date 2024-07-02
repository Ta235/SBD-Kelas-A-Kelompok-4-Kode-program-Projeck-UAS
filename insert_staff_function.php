<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_staff = $_POST['kd_staff'];
    $nama_staff = $_POST['nama_staff'];
    $posisi = $_POST['posisi'];
    

    function showMessage($koneksi, $kd_staff, $nama_staff, $posisi ) {
        $sql = "INSERT INTO `staff`(`Kd_Staff`, `Nama_Staff`, `Posisi`) VALUES ('$kd_staff', '$nama_staff', '$posisi')";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi,  $kd_staff, $nama_staff, $posisi );
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
