<!DOCTYPE html>
<html>
<head>
    <title>Update Transaksi</title>
</head>
<body>
    <h1>Update Data Transaksi</h1>
    <div class="sad">
        Kd Invoice: <input type="text" name="kd_invoice" id="kd_invoice"><br>
        Kd Pelanggan: <input type="text" name="kd_pelanggan" id="kd_pelanggan"><br>
        Kd Barang: <input type="text" name="kd_barang" id="kd_barang"><br>
        Kd Staff: <input type="text" name="kd_staff" id="kd_staff"><br>
        Kd Jasa: <input type="text" name="kd_jasa" id="kd_jasa"><br>
        Tanggal Beli: <input type="date" name="tanggal_beli" id="tanggal_beli"><br>
        Jumlah Barang: <input type="number" name="jumlah_barang" id="jumlah_barang"><br>
        Jumlah Jasa: <input type="number" name="jumlah_jasa" id="jumlah_jasa"><br>
        Harga: <input type="number" name="harga" id="harga"><br>
        <button type="button" onclick="callPhpFunction()">Submit</button>
        <div id="message"></div>
    </div>
</body>
<script>
    function callPhpFunction() {
        var kd_invoice = document.getElementById("kd_invoice").value;
        var kd_pelanggan = document.getElementById("kd_pelanggan").value;
        var kd_barang = document.getElementById("kd_barang").value;
        var kd_staff = document.getElementById("kd_staff").value;
        var kd_jasa = document.getElementById("kd_jasa").value;
        var tanggal_beli = document.getElementById("tanggal_beli").value;
        var jumlah_barang = document.getElementById("jumlah_barang").value;
        var jumlah_jasa = document.getElementById("jumlah_jasa").value;
        var harga = document.getElementById("harga").value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "update_transaksi_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kd_pelanggan=" + encodeURIComponent(kd_pelanggan) + 
                    "&kd_pelanggan=" + encodeURIComponent(kd_pelanggan) + 
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
