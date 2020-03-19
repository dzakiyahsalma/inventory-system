<?php
include('config.php')
?>

<html>

<head>
    <title>
        Insert Data
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Tambah Barang</h2>
    </div>
    <form method="post" action="insert_data.php">
        <?php include('error.php'); ?>
        <div class="input-group">
            <label>Code</label>
            <input type="text" name="code_unique">
        </div>
        <div class="input-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang">
        </div>
        <div class="input-group">
            <label>Lokasi</label>
            <input type="text" name="location">
        </div>
        <div class="input-group">
            <label>Tanggal</label>
            <input type="date" name="date">
        </div>
        <div class="input-group">
            <label>ID PIC</label>
            <input type="text" name="id_pic">
        </div>
        <div class="input-group">
            <label>Nama PIC</label>
            <input type="text" name="nama_pic">
        </div>
        <div class="input-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="Ready">Ready Stock</option>
                <option value="dipinjam">Dipinjam</option>
            </select>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="insert">Tambahkan</button>
        </div>
    </form>
</body>

</html>
