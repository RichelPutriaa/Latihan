<?php
include "dbconfig.php";

$nim = $_POST['nim'];
$nama_depan = $_POST['nama_depan'];
$kodeprodi = $_POST['kodeprodi'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$sqlStatement = "INSERT INTO student (nim, kodeprodi, nama_depan, jenis_kelamin) VALUES ('$nim', '$kodeprodi', '$nama_depan', '$jenis_kelamin')";
$query = mysqli_query($conn, $sqlStatement);

if ($query) {
    header("Location: viewdata.php");
    exit(); 
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

