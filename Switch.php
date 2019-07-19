<html>
<head>
<style>
    .blue {
        color: blue;
    }

    .yellow {
        color: yellow;
    }

    .red {
        color: red;
    }

    img {
        width: 10%;
    }
</style>
</head>
</html>

<?php

/* Switch naredba koristi se da bi se zamenila IF naredba u slucaju potrebe za mnogo IF naredbi. Break; se koristi kada zelimo u Switch da ucinimo naredbe elseif umesto IF, kako ne bi sve proveravao. */

$boja = "crvena";

switch ($boja) {
    case "crvena":
    echo "Odabrali ste crvenu boju!";
    break;

    case "plava":
    echo "Odabrali ste plavu boju";
    break;

    case "zelena":
    echo "Odabrali ste zelenu boju";
    break;

    default:
    echo "Niste odabrali crvenu, plavu, zelenu boju!";
}

echo "<br>";
echo "<br>";

/* 1. Za uneti redni broj dana ispisati koji je to dan u nedelji (1. dan je ponedeljak). */

$dan = date ("N");

switch ($dan) {
    case 1:
        echo "Danas je ponedeljak";
        break;
    case 2:
        echo "Danas je utorak";
        break;
    case 3:
        echo "Danas je sreda";
        break;
    case 4:
        echo "Danas je cetvrtak";
        break;
    case 5:
        echo "Danas je petak";
        break;
    case 6:
        echo "Danas je subota";
        break;
    case 7:
        echo "Danas je nedelja";
        break;
    default: 
        echo "Nevalidan unos";
}

echo "<br>";
echo "<br>";

/* 2. Za unetu prosecnu ocenu ucenika ispisati njegov uspeh te skolske godine.*/

$prosek = 2;

switch ($prosek) {

    case 5: 
        echo "Odlican";
        break;
    case 4: 
        echo "Vrlo dobar";
        break;
    case 3: 
        echo "Dobar";
        break;
    case 2: 
        echo "Dovoljan";
        break;
    default: 
        echo "Nedovoljan";
        break;
}

echo "<br>";
echo "<br>";

/* 3. Za uneti paran broj manji od 10 ispitati da li je uneti broj nula, dvojka, cetvorka, sestica, osmica ili je unos pogresan. */

$broj = 2;

switch ($broj) {

    case 8:
        echo "Broj je 8.";
        break;
    case 6:
        echo "Broj je 6.";
        break;
    case 4:
        echo "Broj je 4.";
        break;
    case 2:
        echo "Broj je 2.";
        break;
    case 0:
        echo "Broj je 0.";
        break;
    default: 
        echo "Unos je pogresan";
        break;
}

echo "<br>";
echo "<br>";

/* 4. Za uneta dva broja i karakter napraviti kalkulator koji vrsi mnozenje ta dva broja ukoliko je uneta slovo "m", deljenje ukoliko je uneto slovo "d", sabiranje ukoliko je uneto slovo "s" ili oduizimanje ukoliko je uneto slovo "o".*/

$a = 4;
$b = 2;

$slovo = "s";

switch($slovo) {
    
    case "m":
        $rez = $a * $b;
        echo $rez;
        break;
    case "d":
        $rez = $a / $b;
        echo $rez;
        break;
    case "s":
        $rez = $a + $b;
        echo $rez;
        break;
    case "o":
        $rez = $a - $b;
        echo $rez;
        break;
    default:
        echo "Nepravilan unos";
        break;
}

echo "<br>";
echo "<br>";

/* 5. Za preuzeti dan sa racunara ispisati jos koliko dana je preostalo do vikenda. */

$dan = date("N");

switch ($dan) {
    
    case 1: 
        echo "Jos 4 dana do vikenda";
        break;
    case 2: 
        echo "Jos 3 dana do vikenda";
        break;
    case 3: 
        echo "Jos 2 dana do vikenda";
        break;
    case 4: 
        echo "Jos 1 dana do vikenda";
        break;
    case 5: 
        echo "Jos 0 dana do vikenda";
        break;
    case 6: 
        echo "Vikend je";
        break;
    case 7: 
        echo "Vikend je";
        break;
    default:
        echo "Nepravilan unos";
        break;
}

echo "<br>";
echo "<br>";

/* 6. Preuzeti redni broj meseca sa racunara i ispisati koji je to mesec u godini. */

$mesec = date("n");

switch ($mesec) {

    case 1:
        echo "Januar";
        break;
    case 2:
        echo "Februar";
        break;
    case 3:
        echo "Mart";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "Maj";
        break;
    case 6:
        echo "Jun";
        break;
    case 7:
        echo "Jul";
        break;
    case 8:
        echo "Avgust";
        break;
    case 9:
        echo "Septermbar";
        break;
    case 10:
        echo "Oktobar";
        break;
    case 11:
        echo "Novembar";
        break;
    case 12:
        echo "Decembar";
        break;
    default:
        echo "Nepravilan unos";
        break;
}

echo "<br>";
echo "<br>";

/* 7. Preuzeti redni broj meseca sa racunara i ispisati koliko taj mesec ima dana. Ukoliko je u pitanju mesec februar, preuzeti i godinu sa racunara, ispisati da li je godina prestupna i na osnovu toga ispisati broj dana meseca februara. */

$mesec = date("n");

switch($mesec) {
   case 1:
        echo date("t");
        break;
    case 2:
        echo date("t");
        break;
    case 3:
        echo date("t");
        break;
    case 4:
        echo date("t");
        break;
    case 5:
        echo date("t");
        break;
    case 6:
        echo date("t");
        break;
    case 7:
        echo date("t");
        break;
    case 8:
        echo date("t");
        break;
    case 9:
        echo date("t");
        break;
    case 10:
        echo date("t");
        break;
    case 11:
        echo date("t");
        break;
    case 12:
        echo date("t");
        break;
    default:
        echo "Nepravilan unos";
        break; 
}

echo "<br>";
echo "<br>";

/* 8. Na osnovu unete boje na engleskom jeziku obojiti tekst paragrafa u crveno, zeleno ili plavo. Ukoliko nije uneta ni jedna od ove tri boje, tekst paragrafa obojiti u zuto.*/

$color = "blue";
$paragraf = "Blah";

switch ($color) {

    case "blue":
        echo "<p>Promenjena slova u plavo</p>";
        break;
    
}

/* While petlja. Izvrsava se dok ne se ne ispuni uslov. */

$i = 1;

while ($i <= 10) {
    echo $i;
    echo "<br>";
    $i++;
}

echo "<br>";

$i = 0;

while ($i < 10) {
    $i++;
    echo $i;
    echo "<br>";
}

echo "<br>";

/* 1. Ispisati brojeve od 1 do 20 */

$i = 1;

while ($i <= 20) {
    echo $i;
    echo "<br>";
    $i++;
}

echo "<br>";

/* Drugi nacin */

$i = 0; 

while ($i < 20) {
    echo 20 - $i;
    echo "<br>";
    $i++;
}

/* 2. Ispisati brojeve od 20 do 1. */

$i = 20;

while ($i >= 1) {
    echo $i;
    echo "<br>";
    $i--;
}

echo "<br>";

/* 3. Ispisati parne brojeve od 1 do 20. */

$i = 1;

while ($i <= 20) {
    if($i % 2 == 0) {
        echo $i;
        echo "<br>";
    }
        $i++;
}

echo "<br>";

/* Nacin 2 */

$i = 2;

while ($i <= 20) {
    echo $i;
    echo "<br>";
    $i = $i + 2;
}

echo "<br>";

/* 4. Odrediti kolicnik i ostatak pri deljenju brojeva a sa b bez koriscenja operacija / i %. */

$a = 7;
$b = 3;

$kol = 0;
$ost = $a;

while($ost >= $b) {
    $ost = $ost - $b;
    $kol++;
}

echo $kol;
echo "<br>";
echo $ost;

/* 5. Sest paragrafa naizmenicno obojiti sa tri razlicite boje. */ 

$text = "Some text bla bla bla...";
$i = 1;

while($i <= 6) {
    if($i % 3 == 1) {
        echo "<p class='blue'>$text</p>";
    }
    elseif($i % 3 == 2) {
        echo "<p class='yellow'>$text</p>";
    }
    else {
        echo "<p class='red'>$text</p>";
    }
    $i++;
}

echo "<br>";

/* 6. Odrediti sumu brojeva od 1 do 100. */

$a = 1;
$zbir = 0;

while ($a <= 100) {
    $zbir = $zbir + $a;
    $a++;
}

echo $zbir;

echo "<br>";

/* 7. Odrediti sumu brojeva od 1 do n. */

$a = 1;
$n = 10;
$zbir = 0;

while ($a <= $n) {
    $zbir = $zbir + $a;
    $a++;
}

echo $zbir;

echo "<br>";

/* 8. Odrediti sumu brojeva od n do m. */

$n = 1;
$m = 20;
$zbir = 0;

while ($n <= $m) {
    $zbir = $zbir + $n;
    $n++;
}

echo $zbir;

echo "<br>";

/* 9. Odrediti proizvod brojeva od n do m. */

$n = 1;
$m = 10;
$rez = 1;

while ($n <= $m) {
    $rez = $zbir * $n;
    $n++;
}

echo $zbir;

echo "<br>";

/* 10. Odrediti sumu kvadrata brojeva od n do m. */

$n = 1;
$m = 10;
$zbir = 0;

while ($n <= $m) {
    $zbir = $zbir + ($n * $n); /* Alternativa za kvadriranje je pow funkcija i u primeru levo ide pow($i, 2); ili $i**2*. Za veci stepen bi umesto "2" stajao stepen kojim stepenujemo.*/
    $n++;
}

echo $zbir;

echo "<br>";

/* FOR petlja. Za razliku od WHILE petlje koristi se kada tacno znate koliko puta zelite da se nesto isvrsi.*/

/*
for(pocetak;kraj;inkrementacija) {
   pocetak je startna pozicija(recimo 100), kraj(recimo 50, gde se petlja zavrsava), inkrementacija(znaci da se pocetak menja ka kraju povecavajuci ili smanjujuci se zavisno od toga da li je veci pocetak ili kraj.
}
*/

for ($i = 0; $i <= 10; $i++) {
    echo "Na redu je broj $i";
    echo "<br>";
}

echo "<br>";

/* 1. Ispisati brojeve od 1 do 20 */

for ($i = 1; $i <= 20; $i++) {
    echo "Na redu je broj $i";
    echo "<br>";
}

echo "<br>";

/* 2. Ispisati brojeve od 20 do 1 */

for ($i = 20; $i >= 1; $i--) {
    echo "Na redu je broj $i";
    echo "<br>";
}

echo "<br>";

/* 3. Ispisati parne brojeve od 1 do 20 */

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
    echo "Na redu je broj $i";
    echo "<br>";
    }
}

echo "<br>";

/* 4. Ispisati dvostruku vrednost brojeva od 5 do 15. */

for ($i = 5; $i <= 15; $i++) {
    echo $i * 2;
    echo "<br>";
}

echo "<br>";

/* 5. Odrediti sumu brojeva od 1 do 100 */

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum = $sum + $i;
}
echo $sum;

echo "<br>";


/* 6. Odrediti sumu brojeva od 1 do n */ 

$n = 5;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum = $sum + $i;
}
echo $sum;

echo "<br>";

/* 7. Odrediti sumu brojeva od n do m */ 

$n = 5;
$m = 10;
$sum = 0;

for ($i = $n; $i <= $m; $i++) {
    $sum = $sum + $i;
}

echo $sum;

echo "<br>";

/* 8. Odrediti proizvod brojeva od n do m */

$n = 5;
$m = 10;
$sum = 1;

for ($i = $n; $i <= $m; $i++) {
    $sum = $sum * $i;
}
echo $sum;

echo "<br>";

/* 9. Odrediti sumu kvadrata brojeva od n do m */

$n = 5;
$m = 10;
$sum = 1;

for ($i = $n; $i <= $m; $i++) {
    $sum = $sum + pow($i, 2);
}
echo $sum;

echo "<br>";

/* 10. Preuzeti sa interneta 3 slike i imenovati ih 1, 2, 3. FOR petljom u HTML-u ispisati svaku od slicica uz pomoc brojaca(iteratora).*/

for ($i=1; $i<=3; $i++) {

    echo "<img src = '$i.jpg'>";
    echo "<br>";
}

echo "<br>";


/* 11. Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. */

$sum = 0;

for ($i = 1; $i <= 30; $i++) {
    if ($i % 9 == 0) {
        $sum += $i;
    }
}
echo $sum;
echo "<br>";

/* 12. Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. */

$sum = 1;

for ($i = 20; $i <= 100; $i++) {
    if ($i % 11 == 0) {
        $sum *= $i;
    }
}
echo $sum;
echo "<br>";

/* 13. Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.*/ 

$br = 0;

for ($i = 5; $i <= 150; $i++) {
    if ($i % 13 == 0) {
        $br += 1;
    }
}
echo $br;
echo "<br>";

/* 14. Ispisati aritmetičku sredinu brojeva od n do m. */

$n = 1;
$m = 5;

$sr = 0;
$br = 0;

for ($i = $n; $i <= $m; $i++) {
    $sr = $sr + $i;
    $br++;
}

echo $sr = $sr / $br;
echo "<br>";

/* 15. Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno. */

$n = -5;
$m = 5;

$i = $n;
$neg = 0;
$poz = 0;

for ($i = $n; $i < $m; $i++) {
    if($i < 0) {
        $neg++;
    }
    else {
        $poz++;
    }
}

echo $neg;
echo "<br>";
echo $poz;
echo "<br>";

/* 16. Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5. */

$br = 0;

for ($i = 5; $i <= 50; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $br++;
    }
}

echo "$br";
echo "<br>";


/* 17. Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su. */

$n = 10;
$m = 30; 

$sum = 0;
$br = 0;



for($i = $n; $i <= $m; $i++) {
   
    $pos = $i%10;  /* Na ovaj nacin uvek dobijes poslednju cifru bez obzira koj broj delis sa 10 ostatak koji ostane je ostatak koji ti treba*/
   
    if ($pos == 4) {
        $sum += $i;
        $br++;
    }
}

echo "Suma je $sum . Brojac je $br";
echo "<br>";

/* 18. Ispisati brojeve od n do m, koji su deljivi sa a. */

$a = 2;
$n = 1; 
$m = 5;

for ($i = $n; $i <= $m; $i++) {
    if ($i%$a == 0) {
        echo $i;
        echo "<br>";
    }
}

echo "<br>";

/* 19. Ispisati brojeve od n do m koji nisu deljivi sa a */

$a = 2;
$n = 1; 
$m = 5;

for ($i = $n; $i <= $m; $i++) {
    if ($i%$a != 0) {
        echo $i;
        echo "<br>";
    }
}

echo "<br>";

/* 20. Odrediti sumu brojeva od n do m koji su nisu deljivi brojem a. */

$a = 2;
$n = 1; 
$m = 5;

$sum = 0;

for ($i = $n; $i <= $m; $i++) {
    if ($i%$a != 0) {
        $sum = $sum + $i;
        echo "<br>";
    }
}

echo $sum;
echo "<br>";


/* 21. Odrediti proizvod brojeva od n do m koji su deljivi brojem a */

$a = 2;
$n = 1; 
$m = 5;

$rez = 1;

for ($i = $n; $i <= $m; $i++) {
    if ($i%$a == 0) {
        $rez = $rez * $i;
        echo "<br>";
    }
}

echo $rez;
echo "<br>";

/* Funkcije ili potprogrami. Ne izvrsava se po pokretanju stranice vec tek nakon sto se pozove na nju. */

function mojaFunkcija () {
    echo "Zdravo svete!";
}

mojaFunkcija(); // Ovaj kod se zove poziv na funkciju. Samo gore napisano "echo 'Zdravo svete!'"; nece uciniti nista.
echo "<br>";

function moja ($tekst) {
    echo $tekst;
}

$tekst = "Zdravo svete!";
moja ($tekst);
echo "<br>";

function korisnik ($ime, $prezime) {
    echo "Korisnik: $ime $prezime";
}

korisnik ("Ana", "Antic");
echo "<br>";
korisnik ("Kosta", "Kostic");
echo "<br>";
korisnik ("Vuk", "Vulic");
echo "<br>";

/*Zadatak godpodje Milene*/ 

function pow_($a, $f) {
    echo pow($a, $f);
}

pow_(5, 2);

echo "<br>";

/* Zadatak. */

function zdravo() {
    echo "Cao Zdravo!!! <br>";
}

function it($i){
    echo "Broj $i";
}

for ($i = 1; $i <=5; $i++) {
    it($i);
    zdravo();
}

/* Ispisi vise puta svoje ime i prezime */

function Potpis($ime, $prezime) {
    echo "Ja sam $ime $prezime <br>";
}

for ($i = 1; $i <= 3; $i++) {
    Potpis("Rade", "Barac");
}

/* Zbir dva broja u funkciji */

function zbir($a, $b) {
    $rez = $a + $b;
    echo $rez;
    echo "<br>";
}

zbir(10, 50);
$a = 5;
$b = 7;
zbir($a, $b);
$x = 12;
$y = 35;
zbir($x, $y);
zbir($x, $x);

/* Tip funkcije koja vraca nesto, npr rezultat */

function zbir1($a, $b) {
    $rez = $a + $b; 
    return $rez;
}

$rezultat = zbir1(5, 17);
echo $rezultat;

echo "<br>";
/*2.*/

function zbir2($a, $b) {
    $rez = $a + $b; 
    return $rez;
}

echo zbir2(zbir2(2,3), zbir2(1,4));

echo "<br>";
/* 3. */

function pro($a, $b) {
    $rez = $a * $b; 
    return $rez;
}

echo pro(pro(4, 2), pro(2, 3));
echo "<br>";

/* 1. Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav. Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić. */

function ime($ime, $prezime) {
    echo "Zdravo $ime, $prezime";
}

ime("Jelena", "Matejic");
echo "<br>";

/* 2. Napisati funkciju zbir koja računa zbir dva realna broja.
Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja.*/

function zbir3($a, $b) {
    $sum = $a + $b;
    echo $sum;
}

zbir3(3, 7);
echo "<br>";

/* 3. Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.*/

function neparan($n) {
    if ($n % 2 == 0) {
        echo "Netacno";
    }
    else {
        echo "Tacno";
    }
}

neparan(3);
echo "<br>";

/* 4. Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja.*/ 

function max2($a, $b) {
    if($a > $b) {
        return $a;
    }
    elseif($a < $b) {
        return $b;
    }
    else {
        echo "Equal numbers";
    }
}

echo max2(5, 7);
echo "<hr>";

/* function max4($a, $b, $c, $d) {
    $maks1 = max2($a, $b);
    $maks2 = max2($c, $d);
    $maks = max2($maks1, $maks2);
    return $maks;
}

$m = max4(1, -3, -5, 7);
echo $m;*/ //Greska u imenovanju promenljivih i funkcija. Resiti.



// 5. Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike. 

function img($a) {
    echo "<img src='$a'>";
}

img("https://www.srbijadanas.com/sites/default/files/styles/full_article_image/public/a/t/2019/01/14/jaje.jpg");
echo "<hr>";

// 6. Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju.

function boja($a) {
    echo "<p style='color: $a';>Ja</p>";
}

boja("blue");
echo "<hr>";


//7. Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.

function fon($a) {
    echo "<p style='font-size: $a';>Font</p>";
}

fon(35);

//8. Napraviti funkciju koja pet puta ispisuje istu rečenicu, a veličina fonta rečenice treba da bude jednaka vrednosti.

function pet($a) {
    for($i = 1; $i <= 5; $i++) {
        echo "<p style='font-size: $a';>Pet Puta</p>";
    }  
}

pet(18);

//9. Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u nedjelji (npr. za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”). Kako bismo realizovali ovaj zadatak da se trazio n-ti mesec u godini?

function sedmiDan($n) {
    switch ($n) {
        case 1:
        echo "Ponedeljak";
        break;

        case 2:
        echo "Utorak";
        break;

        case 3:
        echo "Sreda";
        break;

        case 4:
        echo "Cetvrtak";
        break;

        case 5:
        echo "Petak";
        break;

        case 6:
        echo "Subota";
        break;

        case 7:
        echo "Nedelja";
        break;

        case 8:
        echo "Ponedeljak";
        break;
    }
}

sedmiDan(4);
echo "<hr>";

function sedmiDan2($rBrDana) {

    if ($rBrDana%7 == 1) {
        echo "Ponedeljak";
    }
    elseif ($rBrDana%7 == 2) {
        echo "Utorak";
    }

    elseif ($rBrDana%7 == 3) {
        echo "Sreda";
    }

    elseif ($rBrDana%7 == 4) {
        echo "Cetvrtak";
    }

    elseif ($rBrDana%7 == 5) {
        echo "Petak";
    }

    elseif ($rBrDana%7 == 6) {
        echo "Subota";
    }

    elseif ($rBrDana%7 == 0) {
        echo "Nedelja";
    }

    else {
        echo "Greska";
    }
}
    sedmiDan2(212);
    echo "<br>";

    function meseci($rBrMeseca)
    {
        switch ($rBrMeseca) 
        {
            case ($rBrMeseca%12==1):
                echo "Januar";
                break;
            case ($rBrMeseca%12==2):
                echo "Februar";
                break;
            case ($rBrMeseca%12==3):
                echo "Mart";
                break;
            case ($rBrMeseca%12==4):
                echo "April";
                break;
            case ($rBrMeseca%12==5):
                echo "Maj";
                break;
            case ($rBrMeseca%12==6):
                echo "Jun";
                break;
            case ($rBrMeseca%12==7):
                echo "Jul";
                break;
            case ($rBrMeseca%12==8):
                echo "Avgust";
                break;
            case ($rBrMeseca%12==9):
                echo "Septerbar";
                break;
            case ($rBrMeseca%12==10):
                echo "Oktobar";
                break;
            case ($rBrMeseca%12==11):
                echo "Novembar";
                break;
            case ($rBrMeseca%12==0):
                echo "Decembar";
                break;
            default:
                echo "Greska";
                break;
        }
    }

    meseci(7);
    echo "<hr>";

//10. Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri u intervalu od n do m. Prebrojati koliko ima ovakvih brojeva od n do m.

function deljivSaTri($n, $m) {
    $br = 0;
    for($i = $n; $i <= $m; $i++) {
        if ($i % 3 == 0) {
            echo $i;
            echo "<br>";
            $br++;
        }
    }
    echo $br;
}

deljivSaTri(3, 10);
echo "<hr>";

// 11. Napisati funkciju kojom se ispisuje brojeve u intervalu od n do m koji su deljivi sa tačno dva od brojeva 2, 3, 5 i 7.

$n = 5;
$m = 15;

for ($i = $n; $i <= $m; $i++) 
{
    $br = 0;//Kad se brojac nalazi ovde posle svakog novog $i broja brojac se resetuje nakon finalne provere da li je jednak 2, tj da li je trenutni $i deljiv sa 2 od 4 navedena broja. Cim citac naidje u for petlji na $br = 0, on odmah resetuje brojac na 0 sa svakim povecanjem iteratora $i.
    if ($i % 2 == 0) 
    {
        $br++;
    }

    if ($i % 3 == 0) 
    {
        $br++;
    }

    if ($i % 5 == 0) 
    {
        $br++;
    }

    if ($i % 7 == 0) 
    {
        $br++;
    }

    if ($br == 2)
    {
        echo "$i <br>";
    }
}

echo "<hr>";
// 12. Write a Program to display count, from 5 to 15 using PHP loop 

$i = 5;

while ($i <= 15) {
    echo $i;
    echo "<br>";
    $i++;
}

// 13. Write a factorial program using for loop in php

$num = 4;
$factorial = 1;
 
for ($i=$num; $i>=1; $i--)
{
    $factorial = $factorial * $i;
}
 
echo "The factorial of $num is $factorial";
?>