<html>
<head>
    <style>

        img {
            width: 30%;
        }
    </style>
</head>
</html>

<?php

$godiste = 1994;
$pol = "z";
$tezina = 66;
$visina = 173;
$visinaM = $visina / 100;
$trenGodina = date("Y");
$godina = $trenGodina - $godiste;

$bmi= $tezina / ($visinaM * $visinaM);

if ($bmi < 18.5) {
    echo "BMI: $bmi - Pothranjenost";
}

elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    echo "BMI: $bmi - Normalna tezina";
}

elseif ($bmi >= 25.00 && $bmi <= 29.9) {
    echo "BMI: $bmi - Povisena tezina";
}

else {
    echo "BMI: $bmi - Gojaznost";
}

echo "<br>";
echo "<br>";

if ($pol == "m") {
    echo "<img src ='https://scienceoxford.com/wp-content/uploads/2018/03/avatar-male.jpg'>";
}

else {
    echo "<img src ='https://lakeshorecontracting.ca/wp-content/uploads/2017/12/Female-Avatar.png'>";
}

echo "<br>";
echo "<br>";

echo $godina;

echo "<br>";
echo "<br>";

?>