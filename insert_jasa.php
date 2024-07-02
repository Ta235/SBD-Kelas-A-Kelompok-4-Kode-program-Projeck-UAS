<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jasa</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">
</head>
<body>
    <div class="jasa">
        <h1>Tambah Data Jasa</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_jasa">Kd Jasa</label>
                <input type="text" name="kd_jasa" id="kd_jasa" required>
            </div>
            <div class="form-group">
                 <label for="nama_jasa">Nama Jasa</label>
                 <input type="text" name="nama_jasa" id="nama_jasa" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" name="satuan" id="satuan" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Tambah Jasa</button>
        </form>
    </div>

    <script>
        function callPhpFunction() {
            var kd_jasa = document.getElementById("kd_jasa").value;
            var nama_jasa = document.getElementById("nama_jasa").value;
            var harga = document.getElementById("harga").value;
            var satuan = document.getElementById("satuan").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("message").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "insert_jasa_function.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("kd_jasa=" + encodeURIComponent(kd_jasa) +
                        "&nama_jasa=" + encodeURIComponent(nama_jasa) +
                        "&harga=" + encodeURIComponent(harga) +
                        "&satuan=" + encodeURIComponent(satuan));
        }
    </script>
</body>
</html>
