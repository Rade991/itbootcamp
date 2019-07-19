<?php

/* 1. Za dva uneta broja ispisati koji je veci a koji je manji. */

$a = 5;
$b = 7;

if ($a > $b) {
    echo "a je vece od b";
}

elseif ($b > $a) {
    echo "b je vece od a";
}

else {
    echo "a je jednako b";
}

echo "<Br>";
echo "<Br>";

/* 2. Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, racunati da je u plusu. */

$temp = 40;

if ($temp >= 0) {
    echo "temperatura je u plusu";
}

else {
    echo "temperatura je u minusu";
}

echo "<Br>";
echo "<Br>";

/* 3. U odnosu na pol(muski/zenski) koji je korisnik uneo prikazati odgovarajuci avatar.*/

$pol = "muski";

if ($pol = "muski") {
    echo "Muski avatar";
}

elseif ($pol = "zenski") {
    echo "Zenski avatar";
}

else {
    echo "Pol neodredjen";
}

echo "<Br>";
echo "<Br>";

/* 4. U odnosu na preuzete vrednosti AM i PM sa svog racunara, ispisati da li je trenutno jutro ili popodne. */

$vreme = date("A");

if ($vreme = "AM") {
    echo "Prepodne";
}

else {
    echo "Popodne";
}

echo "<Br>";
echo "<Br>";

/* 5. Za preuzetu godinu sa racunara i unetu godinu rodjenja izracunati da li je osoba punoletna ili maloletna. */

$trenGodina = date("Y");
$godinaRodjenja = 1991;
$godina = $trenGodina - $godinaRodjenja; 

if ($godina >= 18) {
    echo "Osoba je punoletna";
}

else {
    echo "Osoba je maloletna";
}

echo "<Br>";
echo "<Br>";

/* 6. Odrediti najveci od tri uneta broja. */

$a = 5;
$b = 7;
$c = 10;
$max = $a;

if ($max < $b) {
    echo $max = $b;
}

if ($max < $c) {
    echo $max = $c;
}

echo "<p>Najveci broj je $max</p>";

echo "<Br>";
echo "<Br>";

/* 7. Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upise uceniku. Ucenik je polozio ispit ukoliko ima vise od 50 poena, u suprotnom je pao ispit. 

Za više od 50 poena učenik dobija ocenu 6,
za više od 60 poena učenik dobija ocenu 7,
za više od 70 poena učenik dobija ocenu 8,
za više od 80 poena učenik dobija ocenu 9 i
za više od 90 poena učenik dobija ocenu 10.

*/

$ocena = 85;

if ($ocena > 90) {
    echo "Ocena je 10";
}

elseif ($ocena > 80) {
    echo "Ocena je 9";
}

elseif ($ocena > 70) {
    echo "Ocena je 8";
}

elseif ($ocena > 60) {
    echo "Ocena je 7";
}

elseif ($ocena > 50) {
    echo "Ocena je 6";
}

else {
    echo "Ocena je 5";
}

echo "<Br>";
echo "<Br>";

/* 8. Preuzeti koji je dan u nedelji sa racunara i ispitati da li je to radni dan ili je u pitanju vikend. */

$dan = date("l");

if ($dan == "Saturday") {
    echo "Danas je vikend.";
}

elseif ($dan == "Sunday") {
    echo "Danas je vikend.";
}

else {
    echo "Danas je radni dan.";
}

echo "<Br>";
echo "<Br>";

$dan = date("N");

if ($dan <= 5) {
    echo "Radni je dan";
}

else {
    echo "Vikend je";
}

echo "<Br>";
echo "<Br>";


/* 9. Za vreme preuzeto sa racunara ispisati dobro jutro za vreme manje od 12 sati ujutru, dobar dan za vreme manje od 18 sati popodne i u ostalim slucajevima ispisati dobro vece. */

$vreme = date("G");

if ($vreme < 12) {
    echo "dobro jutro";
}

elseif ($vreme < 18) {
    echo "dobar dan";
}

else {
    echo "dobro vece";
}

echo "<Br>";
echo "<Br>";

/* 10. Uporediti dva uneta datuma i ispisati koji od njih je raniji. */

$datum1 = 1991-12-24;
$datum2 = 2019-07-11;

if ($datum1 < $datum2) {
    echo "Datum 1 je stariji od Datuma 2";
}

elseif ($datum1 > $datum2) {
    echo "Datum 1 je mladji od Datuma 2";
}

else {
    echo "Datumi su jednaki";
}

echo "<Br>";
echo "<Br>";

$dan1 = 1;
$mes1 = 7;
$god1 = 2019;

$dan2 = 11;
$mes2 = 7;
$god2 = 2019;


if ($god1 < $god2) {
    echo "Prvi datum je stariji";
}

elseif ($god1 > $god2) {
    echo "Drugi datum je stariji";
}

elseif ($mes1 < $mes2) {
    echo "Prvi datum je stariji";
}

elseif ($mes1 > $mes2) {
    echo "Drugi datum je stariji";
}

elseif ($dan1 < $dan2) { 
    echo "Prvi datum je stariji";
}

elseif ($dan > $dan2) {
    echo "Drugi datum je stariji";
}

else {
    echo "Datumi su isti.";
}

echo "<Br>";
echo "<Br>";

/* 11. Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa racunara i ispitati da li u to vreme firma radi ili ne radi. */

$trenVreme = date("G");

if ($trenVreme < 9) {
    echo "Firma ne radi";
}

elseif ($trenVreme >= 17) {
    echo "Firma ne radi";
}

else {
    echo "Firma radi";
}

echo "<Br>";
echo "<Br>";

/* 12. Za unet pocetak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE */

$p1 = 9;
$k1 = 16;

$p2 = 13;
$k2 = 20;

if ($p1 < $p2) {

    if ($p2 <= $k1) {
        echo "Da";
    }

    else { 
        echo "Ne";
    }

}

else {

    if ($p1 <= $k2) {
        echo "Da";
    }

    else {
        echo "Ne";
    }
}

echo "<Br>";
echo "<Br>";

/* 13. Za uneti broj ispisati da li je paran ili nije.*/

$a = 5;

if ($a%2==0) {
    echo "a je paran broj";
}

else {
    echo "a je neparan broj";
}

echo "<Br>";
echo "<Br>";

/* Drugi nacin */

$broj = 7;
$ost = $broj % 2; /* Daje ostatak posle deljenja ukoliko broj nije u potpunosti deljiv sa 2, tj paran.*/

if ($ost > 0) {
    echo "Neparan";
}

else {
    echo "Paran";
}

echo "<Br>";
echo "<Br>";

/* 14. Za uneti broj ispisati da li je deljiv sa 3 ili ne. */

$a = 5; 

if ($a % 3 == 0) {
    echo "a je deljiv sa 3";
}

else {
    echo "a nije deljiv sa 3";
}

echo "<Br>";
echo "<Br>";

/* 15. Za dva uneta broja, od veceg ucitanog broja oduzeti manji i rezultat ispisati na ekranu. */

$a = 35;
$b = 22; 

if ($a < $b) {
    echo ($b - $a);
}

elseif ($a > $b) {
    echo ($a - $b);
}

else {
    echo "Brojevi su jednaki.";
}

echo "<Br>";
echo "<Br>";

/* 16. Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći od nule ispisati njegov sledbenik.*/

$broj = 5;

if ($broj <= 0) {
    $broj--;
    echo $broj;
}

else {
    $broj++;
    echo $broj;
}

echo "<Br>";
echo "<Br>";


/* 17. Za tri uneta broja ispisati koji od njih ne najveći, koji od njih je srednji, a koji od nih je najmanji. */

$a = 5;
$b = 7;
$c = 9;

/* 18. Za učitani broj ispitati da li je ceo. */

$a = 7.2;

if ((int)$a == $a) {
    echo "Ceo broj.";
}

else {
    echo "Decimalan broj.";
}

echo "<Br>";
echo "<Br>";

/* Random zadatak. Napraviti program koji za uneti pol i broj godina korisnika ispisuje da li je korisnik muskarac ili zena il da li je punoletan.*/

$pol = "z";
$godine = 24;

if ($pol == "z") {
    echo "Zena ";
    if ($godine >= 18){
        echo "Punoletna";
    }
    
    else {
        echo "Maloletna";
    }
}

else {

    echo "Muskarac ";
    if ($godine >= 18) {
       echo "Punoletan";
    }

    else {
        echo "Maloletan";
    }
}

echo "<Br>";
echo "<Br>";

/* Drugi nacin sa novonaucenim logickim operacijama */

$pol = "m";
$godine = 27;

if ($pol == "z" && $godine >= 18) {
    echo "Zena, Punoletna";
}
    
elseif ($pol == "z" && $godine < 18) {
    echo "Zena, Maloletna";
}

elseif ($pol == "m" && $godine >= 18) {
    echo "Muskarac, Punoletan";
}

else {
    echo "Muskarac, Maloletan";
}
echo "<Br>";
echo "<Br>";

/* 20. Učitati dva cela broja i ispitati da li je veći od njih paran. */

$a = 5;
$b = 8;

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

/* 21. Naći koji je najveći od tri uneta broja $a, $b i $c.*/

$a = 5;
$b = 7; 
$c = 9; 

if ($a != $b and $b != $c and $c != $a) {


if ($a>$b && $a>$c) {
    echo "$a je najveci broj.";
}

elseif ($b>$a && $b>$c) {
    echo "$b je najveci broj";
}

else {
    echo "$c je najveci broj";
}

}

echo "<Br>";
echo "<Br>";

/* 22. Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih  i veća od 40 stepeni Celzijusovih*/

$temp = 40;

if ($temp < -15 or $temp > 40) {
    echo "Ekstremna temperatura";
}

else {
    echo "Optimalna temperatura.";
}

echo "<Br>";
echo "<Br>";

/* 23. Ispitati da li je godina prestupna. (Godinu preuzeti sa vremena na Vašem računaru). Prestupna je ona godina koja je deljiva sa 4, ako nije deljiva sa 100, mada ipak jeste deljiva sa 400.*/

$godina = date ("Y");

if ($godina%4==0 and $godina%400==0 and $godina != 0){
    echo "Godina je prestupna"
}

else {
    echo "Godina nije prestupna";
}

echo "<Br>";
echo "<Br>";

/* 24. Za uneto početno i krajnje radno vreme dva lekara, ispitati koliko sati i minuta se njihove smene preklapaju.*/



?>