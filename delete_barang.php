<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">
</head>
<body>
<div class="jasa">
        <h1>Hapus Data Barang</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_barang">Kd Barang</label>
                <input type="text" name="kd_barang" id="kd_barang" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Tambah Barang</button>
        </form>
    </div>

</body>
<script>
    function callPhpFunction() {
        var Kd_Barang = document.getElementById("Kd_Barang").value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "delete_barang_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("Kd_Barang=" + encodeURIComponent(Kd_Barang));
    }
</script>

</html>
