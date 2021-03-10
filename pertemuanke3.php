<?php
    $teks = "Hewan peliharaan milik";
    $teks2 = "Budi dan adiknya";
    $pets = [
        [
            'jenis' => 'Kucing',
            'pemilik' => 'Budi',
        ],
        [
            'jenis' => 'Ikan mas',
            'pemilik' => 'Adik Budi'
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan Ke-3 Pemrograman Web B</title>
</head>
<body>
    <h1>
        <?php 
            echo $teks . " " . $teks2;
        ?>
    </h1>
<!-- <h1>Hewan peliharaan Budi dan adiknya</h1> -->
    <table>
        <thead>
            <tr>
                <th>Jenis Hewan</th>
                <th>Pemilik</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pets as $pet): ?>
                <tr>
                    <td><?= $pet['jenis'] ?></td>
                    <td><?= $pet['pemilik'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>