<?php
include "dbconfig.php";

$nim = $_POST['nim'] ?? $_GET['nim'];

if (isset($nim)) {
    $sqlDelete = "DELETE FROM student WHERE nim = '$nim'";
    $query = mysqli_query($conn, $sqlDelete);

    if ($query) {
        header("Location: viewdata.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "NIM tidak ditemukan.";
}

mysqli_close($conn);
?>



