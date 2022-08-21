<?php

require_once __DIR__ . '/../vendor/autoload.php';

use C45\C45;

$filename = __DIR__ . '/Asesmen.csv';

$c45 = new C45([
                'targetAttribute' => 'play',
                'trainingFile' => $filename,
                'splitCriterion' => C45::SPLIT_GAIN,
            ]);

$tree = $c45->buildTree();
$treeString = $tree->toString();

// print generated tree
echo '<pre>';
print_r($treeString);
echo '</pre>';

$testingData = [
    "Jenis Kelamin" => 'L',
    "Jenis Disabilitas" => 'Totality Blind',
    "alat bantu" => 'tidak ada',
    "peyebab disabilitas" => 'Penyakit',
    "penyakit yang diderita saat ini" =>'ada',
    "obat yg sedang dikonsumsi" => 'tidak ada',
    "apa pernah dirawat?" => 'ya',
    "apa masih perlu pengobatan?" => 'tidak',
    "ada bukti gangguan kesehatan depresi dll?" => 'ya',
    "apa pernah trauma?" => 'ya'
];

echo $tree->classify($testingData); // prints 'no'

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian dokumen</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <img src="logo.jpg" class="logo">
            <img src="logo2.png" class="logo2">
            <div class="menu">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="input.html"class="input">Input</a></li>
                    <li><a href="pencarian.php">Pencarian</a></li>
                    <li><a href="index.php"class="tbl-biru">Logout</a></li>
                </ul>


            </div>
        </div>
    </nav>
</body>
</html> -->