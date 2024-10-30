<?php
include "dbconfig.php";

// Mendapatkan nim dari parameter GET
$nim = $_GET['nim'];

// Jika formulir di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $nim = $_POST['nim'];
    $kodeprodi = $_POST['kodeprodi'];
    $nama_depan = $_POST['nama_depan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // Query untuk update data
    $sqlStatement = "UPDATE student SET 
        kodeprodi = '$kodeprodi',
        nama_depan = '$nama_depan',
        jenis_kelamin = '$jenis_kelamin'
        WHERE nim = '$nim'";

    $query = mysqli_query($conn, $sqlStatement);

    // Setelah berhasil update, arahkan kembali ke viewdata.php
    if ($query) {
        header("Location: viewdata.php");
        exit;
    } else {
        echo "Update gagal: " . mysqli_error($conn);
    }
}

// Mendapatkan data mahasiswa berdasarkan NIM
$sqlStatement = "SELECT * FROM student WHERE nim = '$nim'";
$query = mysqli_query($conn, $sqlStatement);
$data = mysqli_fetch_assoc($query);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <style>
        /* Form Styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form method="post" action="update.php?nim=<?php echo $data['nim']; ?>">
        <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>">

        <label for="kodeprodi">Kode Prodi:</label>
        <input type="text" name="kodeprodi" id="kodeprodi" value="<?php echo $data['kodeprodi']; ?>" required>

        <label for="nama_depan">Nama Depan:</label>
        <input type="text" name="nama_depan" id="nama_depan" value="<?php echo $data['nama_depan']; ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="L" <?php if ($data['jenis_kelamin'] == 'L') echo 'selected'; ?>>L</option>
            <option value="P" <?php if ($data['jenis_kelamin'] == 'P') echo 'selected'; ?>>P</option>
        </select>

        <input type="submit" value="Update" class="btn-submit">
        
    </form>

</body>
</html>
