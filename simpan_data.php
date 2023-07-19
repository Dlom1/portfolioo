<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            line-height: 1.6;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data Pendaftaran</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $status = $_POST["status"];

            echo "<p>Nama Anda: $nama</p>";
            echo "<p>Alamat: $alamat</p>";
            echo "<p>Status: $status</p>";
        }
    ?>
</body>
</html>
