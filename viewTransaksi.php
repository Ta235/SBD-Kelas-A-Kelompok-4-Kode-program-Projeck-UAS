<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <title>Jogja Konveksi</title>
    <link rel="stylesheet" href="static/style.css">
    <script>
        function printTransactionByInvoice() {
            var invoiceCode = prompt("Masukkan Kode Invoice:");
            if (invoiceCode) {
                var transactionTable = document.querySelector('.paraHeader table');
                var rows = transactionTable.querySelectorAll('tr');
                var printContents = '';
                var header = transactionTable.querySelector('tr').outerHTML; // Menambahkan header tabel
                for (var i = 1; i < rows.length; i++) { // Mulai dari 1 untuk melewati header
                    var cells = rows[i].querySelectorAll('td');
                    if (cells.length > 0 && cells[0].textContent.trim() === invoiceCode) {
                        printContents += rows[i].outerHTML;
                    }
                }
                if (printContents) {
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = '<table border="1">' + header + printContents + '</table>';
                    window.print();
                    document.body.innerHTML = originalContents;
                } else {
                    alert('Kode Invoice tidak ditemukan.');
                }
            }
        }
    </script>
</head>
<body>
    <div class="nav_container">
        <nav>
            <div class="nav-item" onclick="window.location.href='/jogja-konveksi/';">
                <a href="#">Home</a>
            </div>
            <div class="nav-item" id="dropbtn" onclick="window.location.href='viewPelanggan.php';">
                <a href="viewPelanggan.php" class="dropbtn">Data Pelanggan</a>
            </div>
            <div class="nav-item" onclick="window.location.href='viewJasa.php';">
                <a class="dropbtn">Data Jasa</a>
            </div>
            <div class="nav-item" onclick="window.location.href='viewBarang.php';">
                <a class="dropbtn">Data Barang</a>
            </div>
            <div class="nav-item" onclick="window.location.href='viewStaff.php';">
                <a class="dropbtn">Data Staff</a>
            </div>
            <div class="nav-item" onclick="window.location.href='viewTransaksi.php';">
                <a class="dropbtn">Data Transaksi</a>
            </div>
        </nav>
    </div>
  
    <div class="content">
        <div class="headingContainer">
            <h1>Tabel Transaksi</h1>
            <div class="paraHeader">
                <?php include 'view_transaksi.php' ?>
            </div>
            <div class="menuData">
                <div class="itemMenu" onclick="window.location.href='insert_transaksi.php';">Tambah Data</div>
                <div class="itemMenu" onclick="window.location.href='delete_transaksi.php';">Hapus Data</div>
                <div class="itemMenu" onclick="printTransactionByInvoice();">Cetak Transaksi</div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>By Fat Cat</p>
    </div>
</body>
</html>
