<?php 
    require "tabung4.php";
    // $_GET['data'] = [
    //     'nama' => 'Riris Amalia S',
    //     'nim' => 192410101079,
    // ]
    // var_dump($_GET);
    // var_dump($_POST);
    // if (isset($_POST['submit'])) {
    //     if (strlen($_POST['input']) > 0) {
    //         echo "login berhasil!";
    //     } else {
    //         echo "Isi form terlebih dahulu!";
    //     }
    // };
    // if ($_SERVER['REQUEST_METHOD']==='POST'){
        // if (empty($_POST)){
        //     echo "kosong";
        // }
    $tabung = new Tabung;  
    if (isset($_POST['submit_btn'])){
       
        $tabung->setDiameter ($_POST['diameter']);
        $tabung->setTinggi ($_POST['tinggi']);
        $tabung->hitungluas();
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $r = $diameter/2;
    //     $luas = 3.14*$diameter*$tinggi;
    //     $volume = 3.14*$r*$r*$tinggi;

    //     echo "Diameter $diameter <br>";
    //     echo "Tinggi $tinggi <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <<!-- <form action="" method="post">
        <input type="text" name="input">
        <button name="submit">Login</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit_btn'>Hitung</button>

        <hr>

        <ul>
            <li>Luas Sisi : <?=$tabung->getLuasSelimut(); ?></li>
            <!-- <li>Volume : <?= $volume; ?></li> -->
        </ul>
    </form>
</body>
</html>