<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Belanja</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .form-group {
        margin-bottom: 15px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Form Belanja</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>
        </div>
        <div class="form-group">
            <label for="produk">Produk:</label>
            <input type="text" id="produk" name="produk" required>
        </div>
        <div class="form-group">
            <label for="jumlah_beli">Jumlah Beli:</label>
            <input type="number" id="jumlah_beli" name="jumlah_beli" min="1" required>
        </div>
        <div class="form-group">
            <label for="harga_satuan">Harga Satuan:</label>
            <input type="number" id="harga_satuan" name="harga_satuan" min="0" step="0.01" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $nama_pelanggan = $_POST["nama_pelanggan"];
        $produk = $_POST["produk"];
        $jumlah_beli = $_POST["jumlah_beli"];
        $harga_satuan = $_POST["harga_satuan"];
        
        $total_belanja = $jumlah_beli * $harga_satuan;
        
      
        if ($total_belanja >= 100000) {
            $diskon = 0.1 * $total_belanja; 
            $diskon = 0;
        }
        
        $total_setelah_diskon = $total_belanja - $diskon;
        
       
        $ppn = 0.1 * $total_setelah_diskon;
        
        $harga_bersih = $total_setelah_diskon + $ppn;
        
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>Nama Pelanggan: $nama_pelanggan</p>";
        echo "<p>Produk: $produk</p>";
        echo "<p>Jumlah Beli: $jumlah_beli</p>";
        echo "<p>Harga Satuan: $harga_satuan</p>";
        echo "<p>Total Belanja: $total_belanja</p>";
        echo "<p>Diskon: $diskon</p>";
        echo "<p>PPN: $ppn</p>";
        echo "<p>Harga Bersih: $harga_bersih</p>";
    }
    ?>
</div>
</body>
</html>
