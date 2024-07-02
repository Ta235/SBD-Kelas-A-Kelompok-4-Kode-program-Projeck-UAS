<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <title>Jogja Konveksi</title>
    <link rel="stylesheet" href="static/style.css">
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
            <div class="nav-item"onclick="window.location.href='viewJasa.php';">
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
            <h1>Tabel Barang</h1>
            <div class="paraHeader">
            <?php include 'view_barang.php'?>
            </div>
            <div class="menuData">
                <div class="itemMenu" onclick="window.location.href='insert_barang.php';">Tambah Data</div>
                <div class="itemMenu" onclick="window.location.href='update_barang.php';">Edit Data</div>
                <div class="itemMenu" onclick="window.location.href='delete_barang.php';">Hapus Data</div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>By Fat Cat</p>
    </div>
</body>
</html>
