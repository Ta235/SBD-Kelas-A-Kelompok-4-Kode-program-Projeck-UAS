<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Staff</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">
</head>
<body>
<div class="jasa">
        <h1>Tambah Data Staff</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_staff">Kd Staff</label>
                <input type="text" name="kd_staff" id="kd_staff" required>
            </div>
            <div class="form-group">
                 <label for="nama_staff">Nama Staff</label>
                 <input type="text" name="nama_staff" id="nama_staff" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" id="posisi" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Tambah Staff</button>
        </form>
    </div>

</body>
<script>
    function callPhpFunction() {
        var kd_staff = document.getElementById("kd_staff").value;
        var nama_staff = document.getElementById("nama_staff").value;
        var posisi = document.getElementById("posisi").value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "insert_staff_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kd_staff=" + encodeURIComponent(kd_staff) +
                    "&nama_staff=" + encodeURIComponent(nama_staff) +
                    "&posisi=" + encodeURIComponent(posisi));
    }
</script>
</html>
