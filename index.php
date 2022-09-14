<!DOCTYPE html>
<html lang="en">
<?php
$one = 1;
$two = 2;
$three = 3;
$fourth = 4;
$five = 5;
$six = 6;
$seven = 7;
$graza = 123.34;
$grazosCentai = (explode( '.', strval($graza)))[1];
$tempVariable;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <?php
        echo('<h2>Kintamuju priskirimas ir atvaizdavimas</h2>');
        echo ("<div> Pirmas: " . $one . "; Antras: " . $two . "; Trecias: " . $three . "; Ketvirtas: " . $fourth . "; Penktas: " . $five . "</div>");
        ?>
        <?php
        echo('<h2>Sudetis</h2>');
        echo ("<div> Sudetis: " . $one + $two + $three + $fourth + $five . "; Daugyba: " . $one * $two * $three * $fourth * $five . "</div>");
        ?>
        <?php
        $tempVariable = $one;
        $one = $two;
        $two = $tempVariable;
        echo('<h2>Sukeitimas su kintamuoju</h2>');
        echo ("<div> Pirmas: " . $one . "; Antras: " . $two . "</div>");
        ?>
        <?php
        $one = $one + $two;
        $two = $one - $two;
        $one = $one - $two;
        echo('<h2>Sukeitimas be kintamojo</h2>');
        echo ("<p> Pirmas: " . $one . "; Antras: " . $two . "</p>");
        ?>
        <?php
        $maxNumber = PHP_INT_MAX;
        echo('<h2>maksimali int reiksme</h2>');
        echo ("<p> Max value: " . $maxNumber . "</p>");
        ?>
        <?php
        $six =   $seven ^ $six;
        $seven = $seven ^ $six;
        $six  = $seven + $six;
        echo('<h2>Sukeitimas su ^</h2>');
        echo ("<p id='Rezultatas'> \$six value: " . $six . " \$seven value: " . $seven . "</p>");
        ?>
        <?php
        //euru paskaiciavimas
        echo('<h2>Euru paskaiciavimas</h2>');
        echo("<h2>Graza: $graza </h2>");
        echo('Simtas:' . intval($graza / 100) . " --- ");
        $graza = $graza % 100;
        echo('Penkesdesimt:' . intval($graza / 50) . " --- ");
        $graza = $graza % 50;
        echo('Dvidesimt: ' . intval($graza / 20) . " --- ");
        $graza = $graza % 20;
        echo('Desimt:' . intval($graza / 10) . " --- ");
        $graza = $graza % 10;
        echo('Penki:' . intval($graza / 5) . " --- ");
        $graza = $graza % 5;
        echo('Du:' . intval($graza / 2) . " --- ");
        $graza = $graza % 2;
        echo('Vienas:' . intval($graza / 1) . " --- ");
        // Centu paskaiciavimas.
        echo('<h2>Centu paskaiciavimas</h2>');
        echo('Penkesdiasimt cnt:' . intval($grazosCentai / 50) . " --- ");
        $grazosCentai = $grazosCentai % 50;
        echo('Dvidesimt cnt:' . intval($grazosCentai / 20) . " --- ");
        $grazosCentai = $grazosCentai % 20;
        echo('Desimt cnt: ' . intval($grazosCentai / 10) . " --- ");
        $grazosCentai = $grazosCentai % 10;
        echo('Penki cnt:' . intval($grazosCentai / 5) . " --- ");
        $grazosCentai = $grazosCentai % 5;
        echo('Du cnt:' . intval($grazosCentai / 2) . " --- ");
        $grazosCentai = $grazosCentai % 2;
        echo('Vienas cnt:' . intval($grazosCentai / 1) . " --- ");
        ?>
    </div>

</body>

</html>