<?php 
  $nama = "Niki Laia";
  $email = "Niki@gmail.com";
  $nomor_telepon = "081234567890";
  $alamat = "jln.12, Medan, Indonesia";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .profile-info {
            margin-top: 20px;
        }
        .profile-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Profile</h1>
        <div class="profile-info">
            <?php
          
            $nama = "Niki Laia";
            $email = "Niki@gmail.com";
            $nomor_telepon = "081234567890";
            $alamat = "jln.12, Medan, Indonesia";

 
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Nomor Telepon:</strong> $nomor_telepon</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            ?>
        </div>
    </div>
</body>
</html>
