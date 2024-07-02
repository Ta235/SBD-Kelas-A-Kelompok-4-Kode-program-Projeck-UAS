<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pelanggan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">
</head>
<body>
<div class="jasa">
        <h1>Update Data Pelanggan</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_pelanggan">Kd Pelanggan</label>
                <input type="text" name="kd_pelanggan" id="kd_pelanggan" required>
            </div>
            <div class="form-group">
                 <label for="nama_pelanggan">Nama Pelanggan</label>
                 <input type="text" name="nama_pelanggan" id="nama_pelanggan" required>
            </div>
            <div class="form-group">
                <label for="nomor_pelanggan">Nomor Pelanggan</label>
                <input type="text" name="nomor_pelanggan" id="nomor_pelanggan" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Update Data Pelanggan</button>
        </form>
    </div>
<body>
<script>
    function callPhpFunction() {
        var kd_pelanggan = document.getElementById("kd_pelanggan").value;
        var nama_pelanggan = document.getElementById("nama_pelanggan").value;
        var nomor_pelanggan = document.getElementById("nomor_pelanggan").value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "update_pelanggan_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kd_pelanggan=" + encodeURIComponent(kd_pelanggan) +
                    "&nama_pelanggan=" + encodeURIComponent(nama_pelanggan) +
                    "&nomor_pelanggan=" + encodeURIComponent(nomor_pelanggan));
    }
</script>

</html>