<?php
    require "Bola.php";

    $bola = new Bola;  
    
    $bola->set_diameter (12);
    $bola->hitung_luas();
    $bola->hitung_volume();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101079</title>
</head>
<body>

    <h3>Riris Amalia Sholikah</h3>

    <h1>Bangun Ruang : Bola</h1>

    <ul>
        <li>Diameter : <?= $bola->get_diameter(); ?></li>
        <li>Luas Sisi : <?= $bola->get_luas(); ?></li>
        <li>Volume : <?= $bola->get_volume(); ?></li>
    </ul>
</body>
</html>