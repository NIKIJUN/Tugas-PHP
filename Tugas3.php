<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Deskripsi Tabel Nilai Mahasiswa</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    .highlight {
        background-color: #f5f5f5;
    }
</style>
</head>
<body>
<?php
// Data nilai mahasiswa
$nilaiMahasiswa = [
    ['nama' => 'Hary', 'nilai' => 85],
    ['nama' => 'Jane ', 'nilai' => 70],
    ['nama' => 'Jessica', 'nilai' => 90],
    ['nama' => 'Amy', 'nilai' => 60],
    ['nama' => 'Putri', 'nilai' => 75],
    ['nama' => 'Ina', 'nilai' => 80],
    ['nama' => 'Eva', 'nilai' => 55],
    ['nama' => 'Eka', 'nilai' => 95],
    ['nama' => 'Grace', 'nilai' => 65],
    ['nama' => 'Bobby', 'nilai' => 50],
];

// Menghitung predikat
function hitungPredikat($nilai) {
    if ($nilai >= 80) {
        return 'Memuaskan';
    } elseif ($nilai >= 70) {
        return 'Bagus';
    } elseif ($nilai >= 60) {
        return 'Cukup';
    } elseif ($nilai >= 50) {
        return 'Kurang';
    } else {
        return 'Buruk';
    }
}
?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nilaiMahasiswa as $key => $mahasiswa) : ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $mahasiswa['nama']; ?></td>
            <td><?php echo $mahasiswa['nilai']; ?></td>
            <td><?php echo $mahasiswa['nilai'] >= 65 ? 'Lulus' : 'Tidak Lulus'; ?></td>
            <td><?php
                if ($mahasiswa['nilai'] >= 80) {
                    echo 'A';
                } elseif ($mahasiswa['nilai'] >= 70) {
                    echo 'B';
                } elseif ($mahasiswa['nilai'] >= 60) {
                    echo 'C';
                } elseif ($mahasiswa['nilai'] >= 50) {
                    echo 'D';
                } else {
                    echo 'E';
                }
            ?></td>
            <td><?php echo hitungPredikat($mahasiswa['nilai']); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">Nilai Tertinggi:</td>
            <td colspan="4"><?php echo max(array_column($nilaiMahasiswa, 'nilai')); ?></td>
        </tr>
        <tr>
            <td colspan="2">Nilai Terendah:</td>
            <td colspan="4"><?php echo min(array_column($nilaiMahasiswa, 'nilai')); ?></td>
        </tr>
        <tr>
            <td colspan="2">Nilai Rata-Rata:</td>
            <td colspan="4"><?php echo number_format(array_sum(array_column($nilaiMahasiswa, 'nilai')) / count($nilaiMahasiswa), 2); ?></td>
        </tr>
        <tr>
            <td colspan="2">Jumlah Mahasiswa:</td>
            <td colspan="4"><?php echo count($nilaiMahasiswa); ?></td>
        </tr>
        <tr>
            <td colspan="2">Jumlah Keseluruhan Nilai:</td>
            <td colspan="4"><?php echo array_sum(array_column($nilaiMahasiswa, 'nilai')); ?></td>
        </tr>
    </tfoot>
</table>
</body>
</html>
