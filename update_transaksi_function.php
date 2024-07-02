<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd_pelanggan = $_POST['kd_pelanggan'];
    $kd_barang = $_POST['kd_barang'];
    $kd_staff = $_POST['kd_staff'];
    $kd_jasa = $_POST['kd_jasa'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $jumlah_jasa = $_POST['jumlah_jasa'];
    $harga = $_POST['harga'];
    
    // echo "$kd_pelanggan $kd_barang $kd_staff $kd_jasa $tanggal_beli $jumlah_barang $jumlah_jasa $harga";
    $jasaHarga = 0;
    $barangHarga = 0;
    $total = 0;

    $sqlJasa = "SELECT * FROM jasa WHERE kd_jasa = '$kd_jasa'";
    $hargaJasa = $koneksi->query($sqlJasa);
    $sqlBarang = "SELECT * FROM barang WHERE Kd_barang = '$kd_barang'";
    $hargaBarang = $koneksi->query($sqlBarang);
    
    
    if ($hargaJasa && $hargaJasa->num_rows > 0) {
        while ($row = $hargaJasa->fetch_assoc()) {
            // echo "Jasa: " . $row['Harga'];
            $jasaHarga = $row['Harga'];
        }

    } else {
        echo "Gagal mengambil data jasa.";
    }
    if ($hargaBarang && $hargaBarang->num_rows > 0) {
        while ($row = $hargaBarang->fetch_assoc()) {
            // echo "Jasa: " . $row['Harga'];
            $barangHarga = $row['Harga_Barang'];
        }

    } else {
        echo "Gagal mengambil data barang.";
    }

    $total = ($jumlah_jasa * $jasaHarga) + ($jumlah_barang * $barangHarga);
    // echo "Harga Jasa: $jasaHarga \nHarga Barang: $barangHarga \n Total: $total";


    function showMessage($koneksi, $kd_pelanggan ,$kd_barang ,$kd_staff ,$kd_jasa ,$tanggal_beli ,$jumlah_barang ,$jumlah_jasa ,$total) {
        $sql = "INSERT INTO `transaksi`(`kd_pelanggan`, `kd_barang`, `kd_staff`, `kd_jasa`, `tanggal_beli`, `jumlah_barang`, `jumlah_jasa`, `harga`) VALUES ('$kd_pelanggan', '$kd_barang', '$kd_staff', '$kd_jasa', '$tanggal_beli', $jumlah_barang, $jumlah_jasa, $total);";
        $result = $koneksi->query($sql);
        if($result){
            echo "Success";
        } else {
            echo "Gagal";
        }
    }

    showMessage($koneksi, $kd_pelanggan ,$kd_barang ,$kd_staff ,$kd_jasa ,$tanggal_beli ,$jumlah_barang ,$jumlah_jasa ,$total);
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
}
$koneksi->close()
?>
