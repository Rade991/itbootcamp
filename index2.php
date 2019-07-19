<?php

/* Za unetu cenu robe i kolicinu novca koju je kupac dao, ispisati koliki kusar treba kasirka da vrati kupcu*/

$cena=100;
$novac=250;
$kusur = $novac-$cena;
echo $kusur;

/* 2. Konverzija valuta (din=>eur)
		Kurs: 1e=117.81*/

		$dinari = 20000;
		$euri = $dinari / 117.81;
		echo $euri;
		echo "<br>";

/* 3. Konverzija iz eur u dol ako je poznata dinarska protivvrednost 1e = 117.81; 1$ = 104.86*/

	$euri = 250;
	$dinari = $euri * 117.81;
	$dolari = $dinari / 104.86;

	echo $euri . " eura = " . $dolari . " dolara.";
	echo "<br>";

	/* 4. Konvertovati iz celziusa u frarenhajte a formula je C * 9/5 + 32*/
	$celsius=40;
	$fahrenheit=$celsius * 9/5 + 32;

	echo $celsius . " celzijusa=" . $fahrenheit . " farenhajta.";
	echo "<br>";

	/* 4. Konvertovati iz farenhajta u celsiuse*/

	$far=90;
	$cel=($far - 32) * 5/9;
	echo $far . " far = " . $cel . " cel.";
	echo "<br>";

	/* Za odabrano vreme u satima i minutima izracunati koliko je minuta proslo od ponoci.*/

	$sati = 13;
	$minuta = 49;
	$ukupnoMinuta = $sati * 60 + 49;
	echo $ukupnoMinuta;
	echo "<br>";

	/* Druga varijanta: trenutno vreme */
	/* date(format) - vraca trenutni datum i vreme U ODREDJENOM FORMATU koji se pise unutar zagrada*/
	/* format = "G" - 24h-vreme (0 - 23)
	   format = "g" - 12h-vreme (0 - 11)
	   format = "H" - 24h-vreme (00 - 23)
	   format = "h" - 12h-vreme (00 - 11)
	   format = "i" - za minute (00 - 59)
	*/

	$sati = date("G"); 
	$minuti = date("i");
	$ukupnoMinuta = $sati * 60 + $minuti;
	echo $ukupnoMinuta;
	echo "<br>";

?>

