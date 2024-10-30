<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <style>
        /* Reset Margin and Padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        form {
            background-color: #ffffff;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Labels and Inputs */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="nim"],
        input[type="nama_depan"],
        input[type="kodeprodi"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Select styling */
        select {
            appearance: none;
            cursor: pointer;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <form method="post" action="insertdata.php">
        <label for="nim">NIM :</label>
        <input type="nim" name="nim" id="nim">

        <label for="kodeprodi">Kode Prodi :</label>
        <input type="kodeprodi" name="kodeprodi" id="kodeprodi">

        <label for="nama_depan">Nama Depan :</label>
        <input type="nama_depan" name="nama_depan" id="nama_depan">

        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <select name="jenis_kelamin"> 
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="1">P</option>
            <option value="2">L</option>
        </select>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
