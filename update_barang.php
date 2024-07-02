<?php 
    include 'koneksi.php';
    $sql = "SELECT * FROM barang";
    $result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">
</head>
<body>
<div class="jasa">
        <h1>Tambah Data Barang</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_barang">Kd Barang</label>
                <input type="text" name="kd_barang" id="kd_barang" required>
            </div>
            <div class="form-group">
                 <label for="nama_barang">Nama Barang</label>
                 <input type="text" name="nama_barang" id="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="text" name="harga_barang" id="harga_barang" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" name="satuan" id="satuan" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Tambah Barang</button>
        </form>
    </div>

    <script>
        function callPhpFunction() {
            var kdBarang = document.getElementById("kd_barang").value;
            var namaBarang = document.getElementById("nama_barang").value;
            var hargaBarang = document.getElementById("harga_barang").value;
            var satuan = document.getElementById("satuan").value;
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // console.log(this)
                    document.getElementById("message").innerHTML = this.responseText;
                    // console.log(this.responseText)
                }
            };
            xhttp.open("POST", "update_barang_function.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("kd_barang=" + encodeURIComponent(kdBarang) +
                        "&nama_barang=" + encodeURIComponent(namaBarang) +
                        "&harga_barang=" + encodeURIComponent(hargaBarang) +
                        "&satuan=" + encodeURIComponent(satuan));
        }
    </script>
</body>
</html>
