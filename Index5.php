<?php

/* 1. */

$a = 5;
$b = 7;
$c = 9;

If ($a != $b && $a != $c && $b != $c)

if ($a > $b && $a > $c) {
    $max = $a;
}

elseif ($b > $c && $b > $a) {
    $max = $b;
}

else {
    $max = $c;
}

if ($a < $b && $a < $c) {
    $min = $a;
}

elseif ($b < $c && $b < $a) {
    $min = $b;
}

else {
    $min = $c;
}

if ($a < $b && $a > $c || $a > $b && $a < $c) {
    $mid = $a;
}

elseif ($b > $c && $b < $a || $b < $c && $b > $a) {
    $mid = $b;
}

else {
    $mid = $c;
}

echo "Najveci je $max";
echo "<br>";
echo "Srednji je $mid";
echo "<br>";
echo "Najmanji je $min";

echo "<br>";
echo "<br>";

/* 2. */

$a = 10;
$b = 7;

if ($a < $b) {
    if ($b%2 ==0) {
        echo "Veci broj je paran";
    }

    else {
        echo "Veci broj je neparan";
    }
}

elseif ($a > $b) {
    if ($a%2 ==0) {
        echo "Veci broj je paran";
    }

    else {
        echo "Veci broj je neparan";
    }
}

else {
    echo "Nema veceg broja";
}

echo "<Br>";
echo "<Br>";

/* 3. */ 

$dan = date("N");
$vreme = date ("G");

if ($dan <= 5 && $vreme >= 9 && $vreme <= 20) {
    echo "Butik je trenutno otvoren";
}

elseif ($dan >= 6 && $vreme >= 10 && $vreme <= 18) {
    echo "Butik je trenutno otvoren";
}

else {
    echo "Butik je zatvoren";
}


?>