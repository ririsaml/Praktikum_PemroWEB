<?php
    $teks = 'Hewan peliharaan milik '
    $teks2 = 'Budi dan adiknya'
    $pets = [
        [
            'jenis' => 'Kucing',
            'pemilik' => 'Budi',
        ],
        [
            'jenis' => 'Anjing',
            'pemiliki' => 'Adik Budi'
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan Ke-3 Pemrograman Web B</title>
</head>
<body>
    <? foreach ($pets as $pet) : ?>
    <h1>
        <?php 
            echo $teks . " " . $teks2;
        ?>
    </h1>
    <tr>
        <th>Hewan Peliharaan</th>
        <th>Pemilik</th>
    </tr>
    <tr>
        <td><? echo $pet['jenis']?></td>
        <td><? echo $pet['nama']?></td>
    </tr>
</body>
</html>