<?php

/* 1. Napisati funkciju suma koja određuje sumu onih brojeva koji su deljivi
sa 3 i nisu deljivi sa 7, u intervalu od n do m. Sumu vratiti pomoću
return naredbe i tek onda je ispisati na ekranu. */

function suma($n, $m) 
{
    $sum = 0;
    for ($i = $n; $i <= $m; $i++) 
    {   
        if ($i % 3 == 0 and $i % 7 != 0) 
        {
            $sum = $sum + $i;
        }
    }    
    return $sum;
}

echo suma(1, 10);
echo "<hr>";

/* 2. Napraviti funkciju ispis kojoj se prosleđuju tri parametra – boja na
engleskom jeziku $color, numerička vrednost za veličinu fonta $font i
numeričku vrednosti za broj iteracija $n. U funkciji iteriranje vršiti $n
puta pomoću while petlje i u okviru HTML paragrafa ispisivati redni
broj iteracije, paragraf obojiti prosleđenom bojom i podesiti mu
prosleđenu veličinu za veličinu fonta.*/

function ispis($color, $font, $n) 
{   
    $i = 1;
    while($i<=$n) 
    {
        echo "<p style='font-size:$font; color: $color;'>$i</p>";
        echo "<br>";
        $i++;
    }
}

ispis("blue", 25, 5);
echo "<hr>";

/* 3. Napraviti funkciju krvnaGrupa koja na osnovu prosleđenog tipa krvne
grupe A+, 0+, B+ ili AB+ u switch naredbi ispisuje krv koje krvne
grupe osoba može da primi, a kojim krvnim grupama krv može da da,
na osnovu sledeće tabele. */

function krvnaGrupa($a) 
{
    switch ($a) 
    {
        case "A+":
        echo "Moze da primi A+ i O+. Moze da da A+ i AB+";
        break;

        case "O+":
        echo "Moze da primi O+. Moze da da 0+, A+, B+, AB+";
        break;

        case "B+":
        echo "Moze da primi B+ i O+. Moze da da B+ i AB+";
        break;

        case "AB+":
        echo "Moze da primi sve krvne grupe. Moze da da AB+";
        break;

        default:
        echo "Los unos";
    }
}

krvnaGrupa("O+");

?>