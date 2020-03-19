<?php
include 'config.php';
$result = mysqli_query($database, "SELECT * FROM insertdata");
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Tabel Barang
    </title>
</head>

<body>
    <br>
    <a href="insert_data.php">Tambahkan Barang</a>
    </br>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table>
            <tr>
                <td>Code</td>
                <td>Nama Barang</td>
                <td>Lokasi</td>
                <td>Tanggal</td>
                <td>ID PIC</PICture>
                </td>
                <td>PIC</td>
                <td>Status</td>
                <td>.</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["code_unique"]; ?></td>
                    <td><?php echo $row["nama_barang"]; ?></td>
                    <td><?php echo $row["location"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["id_pic"]; ?></td>
                    <td><?php echo $row["nama_pic"]; ?></td>
                    <td><?php echo $row["status"]; ?></td>
                    <td>
                        <a class="edit" href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                        <a class="delete" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No Result Found";
    }
    ?>
</body>

</html>
