<?php
require_once 'Mahasiswa.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $nilai);
}
?>


<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="kuliah">Kuliah:</label>
                <input type="text" id="kuliah" name="kuliah">
            </div>
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="number" id="nilai" name="nilai" min="0" max="100">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>

        <?php
     
        if (isset($mahasiswa)) {
            echo '<h2>Hasil</h2>';
            echo '<table>';
            echo '<tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>';
            echo '<tr>';
            echo '<td>'.$mahasiswa->nim.'</td>';
            echo '<td>'.$mahasiswa->nama.'</td>';
            echo '<td>'.$mahasiswa->kuliah.'</td>';
            echo '<td>'.$mahasiswa->nilai.'</td>';
            echo '<td>'.$mahasiswa->grade.'</td>';
            echo '<td>'.$mahasiswa->predikat.'</td>';
            echo '<td>'.$mahasiswa->status.'</td>';
            echo '</tr>';
            echo '</table>';
        }
        ?>
    </div>
</body>
</html>
