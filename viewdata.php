<?php
include "dbconfig.php";

$sqlStatement = "SELECT * FROM student";
$query = mysqli_query($conn, $sqlStatement);

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        /* Styling Table Container */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        /* Table Styling */
        table {
            width: 100%;
            max-width: 900px;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Button Styling */
        .btn {
            padding: 5px 10px;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-update {
            background-color: #4CAF50;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .btn-update:hover {
            background-color: #45a049;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>NIM</th>
            <th>Kode Prodi</th>
            <th>Nama Depan</th>
            <th>Nama Tengah</th>
            <th>Nama Belakang</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo $row["nim"]; ?></td>
                <td><?php echo $row["kodeprodi"]; ?></td>
                <td><?php echo $row["nama_depan"]; ?></td>
                <td><?php echo $row["nama_tengah"]; ?></td>
                <td><?php echo $row["nama_belakang"]; ?></td>
                <td><?php echo $row["jenis_kelamin"]; ?></td>
                <td><?php echo $row["tanggal_lahir"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td>
                    <a href="update.php?nim=<?php echo $row['nim']; ?>" class="btn btn-update">Update</a>
                    <a href="delete.php?nim=<?php echo $row['nim']; ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>
