<html>
    <head>
        <style>
            img{
                width: 150px;
            }
        </style>
    </head>

    <body>

    <?php

        $putanja = "images/Munk.jpg";
        echo "<img src='$putanja'>";

        /* Za radnika je poznato: 
            - broj radnih sati u mesecu
            - cena rada po satu
            - procenat odbijanja na doprinosa
            Odrediti bruto i neto dohodak radnika.
        */

        $brojSati = 160;
        $cena = 5;
        $procenat = 65;

        $bruto = $brojSati * $cena;
        $neto = $bruto - $bruto * $procenat / 100;
        echo "<p>Bruto zarada: $bruto &euro;, Neto zarada: $neto &euro; </p>";

        /* Broj minuta pretvoriti u sate i minute.  */

        $brojMinuta = 63;
        $sati = (int)($brojMinuta / 60);
        $minuti = $brojMinuta % 60;
        echo "<p>Broj sati: $sati, broj minuta: $minuti</p>";

        /* Ako je vrednost neke robe x dinara, odrediti najmanju kolicinu novcanica od 500din, 100din, 10din i 1din kojima se moe platiti data roba */

        $x = 2399;

        $petsto = (int)($x / 500);
        $x = $x % 500;

        $sto = (int)($x / 100);
        $x = $x % 100;

        $deset = (int)($x / 10);

        $jedan = $x % 10;

        echo "<p>Petsto: $petsto, Sto: $sto, Deset: $deset, Jedan: $jedan.</p>";
    ?>

    </body>
</html>

<?php

        /*
          If (uslov) {} - komanda koristi se za granjanje True i False i izvrsavanje ili ne izvrsavanje necega ukoliko je If komanda ispunjena
        */

    $a=5;
    $b=3;
    if ($a>$b)
    {
        echo "a je vece od b";
    }
    echo "<br>";

    $a=7;
    $b=3;

    if($a > $b) {
        echo "vrednost a je veca od vrednosti b";
    }
    echo "<br>";

    /*Kako ispitati da li su dva elementa jednaka a ispod ispisati kako ako su razlicita*/

    $a=5;
    $b=5;
    if($a == $b){
        echo "a i b su jednaki";
    }
    echo "<br>";

    $a=5;
    $b=5;
    if($a != $b){
        echo "a i b su jednaki";
    }
    echo "<br>";

    $a=5;
    $b=5;
    if($a <= $b){
        echo "a i b su jednaki";
    }
    echo "<br>";

    /* Else naredba ispisuje nesto ukoliko je uslov netacan. */

    $a = -5;
    $b = 5;

    if($a == $b) {
        echo "Jednako";
    }

    else{
        echo "Nejednaki";
    }

    echo "<br>";

    /*
        Elseif se koristi kao drugi uslov pored If i moze ih biti mnogo.
    */

    $a = 5;
    $b = 3;

    if ($a < $b){
        echo "a je manje od b";
    }

    elseif($a > $b) {
        echo "a je vece od b";
    }

    else {
        echo "a je jednako b";
    }
    
    echo "<br>";

    $a = -10;

    if($a < 0) {
        echo "negativan";
    }

    elseif($a = 0){
        echo "Nula";
    }

    elseif($a < 10){
        echo "prva desetica";
    }

    else {
        echo "Veci od 10";
    }

    echo "<br>";

    /* 2. Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, racunati da je u plusu.*/

    $a = 10;

    if ($a >= 0){
        echo "Temperatura u plusu";
    }

    else{
        echo "Temperatura u minusu";
    }
    echo "<br>";

    /* 3. U odnosu na pol (muski/zenski) koji je korisnik uneo prikazati odgovarajuci avatar. */

        $muski="images/muski.jpg";   
        $zenska="images/zenski.jpg";
        $osoba=$zenska;

        if($osoba == $muski){
            echo "<img src = ' $muski '>";
        }

        else{
            echo "<img src = ' $zenska '>";
        }
        echo "<br>";

        $pol = "z";
        if ($pol=="m"){
            echo "muski";
        }

        else{
            echo "zenski";
        }
        echo "<br>";

    /* U odnosu na preuzete vrednosti AM i PM sa svog racunara, ispisati da li je trenutno jutro ili popodne. */

    $vreme = date("G"); 

    if($vreme < 12) {
        echo "Prepodne";
    }

    else{
        echo "Popodne";
    }
    echo "<br>";

    $x = date("A");  /* Tacan nacin jer treba u AM i PM, a za to je date("A"); funkcija. */
    
    if ($x == "PM"){
        echo "popodne";
    }
    else {
        echo "prepodne";
    }
    echo "<br>"; 
    
    /* Za preuzetu godinu sa racunara i unetu godinu rodjenja izracunati da li je osoba punoletna ili maloletna.*/

    $godina = date("Y");

    $godinaRodjenja = 1991;

    $x = $godina - $godinaRodjenja;

    if($x < 18) {
        echo "Maloletna";
    }

    else{
        echo "Punoletna";
    }
    echo "<br>";
    echo "$x";
    echo "<br>";

    /* Odrediti najveci od tri uneta broja. */
    /*Nacin 1: Praktican u slucaju mnogo, mnogo razlicitih brojeva*/

    $a = 5;
    $b = 9;
    $c = 12;

    $max = $a; /* Predpostavis da je neka vrednost maximum*/

    if($max < $b){
        $max = $b;
    }

    if($max < $c) {
        $max = $c;
    }

    echo "$max";
    echo "<br>";

    /* Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upise uceniku. Ucenik je polozio ispit ukoliko ima vise od 50 poena, u suportnom je pao ispit. Za vise od 50 poena ocena je 6, za vise od 60 ocena je 7, za vise od 70 ocena je 8, za vise od 80 ocena je 9, za vise od 90 ocena je 10.*/

    $ocena = 67;
    $sest = 50;
    $sedam = 60;
    $osam = 70;
    $devet = 80;
    $deset = 90;
    
    if($ocena > $deset){
        echo "Ocena je 10.";
    }

    elseif($ocena > $devet){
        echo "Ocena je 9.";
    }

    elseif($ocena > $osam){
        echo "Ocena je 8.";
    }

    elseif($ocena > $sedam){
        echo "Ocena je 7.";
    }

    elseif($ocena > $sest){
        echo "Ocena je 6.";
    }
    echo "<br>";

    /* Preuzeti koji je dan u nedelji sa racunara i ispitati da li je to radni dan ili je u pitanju vikend. */

    $dan = date ("l");
    
?>
