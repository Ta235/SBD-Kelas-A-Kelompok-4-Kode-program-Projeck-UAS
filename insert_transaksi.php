<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Transaksi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">

</head>
<body>
<div class="jasa">
        <h1>Tambah Data Transaksi</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_pelanggan">Kd Pelanggan</label>
                <input type="text" name="kd_pelanggan" id="kd_pelanggan" required>
            </div>
            <div class="form-group">
                 <label for="kd_Barang">Kd Barang</label>
                 <input type="text" name="kd_barang" id="kd_barang" required>
            </div>
            <div class="form-group">
                <label for="kd_staff">Kd Staff</label>
                <input type="text" name="kd_staff" id="kd_staff" required>
            </div>
            <div class="form-group">
                <label for="kd_jasa">Kd Jasa</label>
                <input type="text" name="kd_jasa" id="kd_jasa" required>
            </div>
            <div class="form-group">
                <label for="tanggal_beli">Tanggal Beli</label>
                <input type="date" name="tanggal_beli" id="tanggal_beli" required>
            </div>

            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" name="jumlah_barang" id="jumlah_barang" required>
            </div>
            <div class="form-group">
                <label for="jumlah_jasa">Jumlah Jasa</label>
                <input type="number" name="jumlah_jasa" id="jumlah_jasa" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Tambah Transaksi</button>
        </form>
    </div>
</body>
<script>
    function callPhpFunction() {
        var kd_pelanggan = document.getElementById("kd_pelanggan").value;
        var kd_barang = document.getElementById("kd_barang").value;
        var kd_staff = document.getElementById("kd_staff").value;
        var kd_jasa = document.getElementById("kd_jasa").value;
        var tanggal_beli = document.getElementById("tanggal_beli").value;
        var jumlah_barang = document.getElementById("jumlah_barang").value;
        var jumlah_jasa = document.getElementById("jumlah_jasa").value;
        var harga = document.getElementById("harga");
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "insert_transaksi_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kd_pelanggan=" + encodeURIComponent(kd_pelanggan) +
                    "&kd_barang=" + encodeURIComponent(kd_barang) +
                    "&kd_staff=" + encodeURIComponent(kd_staff) + 
                    "&kd_jasa=" + encodeURIComponent(kd_jasa) + 
                    "&tanggal_beli=" + encodeURIComponent(tanggal_beli) + 
                    "&jumlah_barang=" + encodeURIComponent(jumlah_barang) + 
                    "&jumlah_jasa=" + encodeURIComponent(jumlah_jasa) +
                    "&harga=" + encodeURIComponent(harga));
    }
</script>
</html>



<!-- INSERT INTO `transaksi`(`kd_pelanggan`, `kd_barang`, `kd_staff`, `kd_jasa`, `tanggal_beli`, `jumlah_barang`, `jumlah_jasa`, `harga`) 
VALUES ('awdad', 'awda', 'S2', '4', '2023-07-02', 10, 5, 100000); -->
