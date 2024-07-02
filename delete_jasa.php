<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Jasa</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">
</head>
<body>
<div class="jasa">
        <h1>Hapus Data Jasa</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_jasa">Kd Jasa</label>
                <input type="text" name="kd_jasa" id="kd_jasa" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Hapus Jasa</button>
        </form>
    </div>
</body>
<script>
    function callPhpFunction() {
        var kd_jasa = document.getElementById("kd_jasa").value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "delete_jasa_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kd_jasa=" + encodeURIComponent(kd_jasa));
    }
</script>
</html>
