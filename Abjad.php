<?php

$abjad = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

$mapel = ["Pendidikan Agama Islam", "Pendidikan Pancasila", "Bahasa Indonesia", "Matematika", "Bahasa Inggris", "Dasar-dasar Kejuruan RPL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            background-color: purple;
            width: 50px;
            color: #fff;
            line-height: 50px;
            margin: 5px;
            text-align: center;
            border-radius: 50px;
            float: left;
        }
        .clear{
            clear: both;
        }
        .kotak2{
            height: 100px;
            width: 100px;
            margin: 5px;
            text-align: center;
            line-height: 100px;
            background: orange;
            color: #fff;
            border-radius: 10% 0 10% 0;
            float: left;
        }
    </style>
</head>
<body>
    <h3>Abjad Figo</h3>
    <?php for($a = 0; $a < count($abjad); $a++) : ?>
        <div class="kotak"><?= $abjad[$a]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <h3>Matapelajaran - XRPL2</h3>
    <?php foreach($mapel as $data) : ?>
        <div class="kotak2"><?= $data; ?></div>
    <?php endforeach; ?>
</body>
</html>