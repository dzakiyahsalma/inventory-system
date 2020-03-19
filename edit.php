<?php
include('database.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Edit Data
    </title>
</head>

<body>
    <div class="Edit Data">
        <<h2>Edit Data</h2>
    </div>
    <br>
    <a href="save_data.php">Lihat Tabel</a>
    </br>
    <h3>Edit Data</h3>
    <?php
    include('error.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM insertdata WHERE id='$id'";
    $querys = mysqli_query($database, $query);
    $nomor = 1;
    while ($data = mysqli_fetch_array($querys)) {
    ?>
        <form action="update.php" method="post">
            <table>
                <div class="input-group">
                    <label>Code</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="code_unique" value="<?php echo $data['code_unique'] ?>">
                </div>
                <div class=" input-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
                </div>
                <div class="input-group">
                    <label>Lokasi</label>
                    <input type="text" name="location" value="<?php echo $data['location'] ?>">
                </div>
                <div class="input-group">
                    <label>Tanggal</label>
                    <input type="date" name="date" value="<?php echo $data['date'] ?>">
                </div>
                <div class="input-group">
                    <label>ID PIC</label>
                    <input type="text" name="id_pic" value="<?php echo $data['id_pic'] ?>">
                </div>
                <div class="input-group">
                    <label>Nama PIC</label>
                    <input type="text" name="nama_pic" value="<?php echo $data['nama_pic'] ?>">
                </div>
                <div class="input-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" value="<?php echo $data['status'] ?>">
                        <option value="Ready">Ready Stock</option>
                        <option value="dipinjam">Dipinjam</option>
                    </select>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="update">Simpan</button>
                </div>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>