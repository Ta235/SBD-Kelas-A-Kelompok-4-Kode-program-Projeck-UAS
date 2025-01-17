<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Staff</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="static/style-ad.css">

</head>
<body>
<div class="jasa">
        <h1>Hapus Data Staff</h1>
        <div id="message"></div>
        <form id="jasaForm">
            <div class="form-group">
                <label for="kd_Staff">Kd Staff</label>
                <input type="text" name="kd_Staff" id="kd_Staff" required>
            </div>
            <button type="button" onclick="callPhpFunction()">Hapus Staff</button>
        </form>
    </div>

</body>
<script>
    function callPhpFunction() {
        var kd_Staff = document.getElementById("kd_Staff").value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this)
                document.getElementById("message").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        };
        xhttp.open("POST", "delete_staff_function.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("kd_Staff=" + encodeURIComponent(kd_Staff));
    }
</script>
</html>
