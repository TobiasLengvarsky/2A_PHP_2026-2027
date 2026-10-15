<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tobias</p>
    <?php
    // Vytvorenie premennej a definovanie hodnoty
    $premenna = "text";
    $meno = "Tobias";
    /*
    Tu sa dá písať viacriadkový komentár.
    Znak "." sa používa na spájanie reťazcov/stringov v PHP
    */
    echo "Ahoj, moje meno je " . $meno;
    echo "<br>";


    $vysledok = 4 + 6;
    echo $vysledok;
    echo "<br>";
    

    if ($vysledok == 10){
        echo "Výsledok je 10";
    }else {
        echo "Výsledok nie je 10";
    }
    echo "<br>";

    for($i = 0; $i < 6; $i++){
        if($i == 5){
            echo $i;
        }else {
            echo $i . ", "; 
        }           

        //1. cyk.: $i = 0
        //2. cyk.: $i = 1
    }

    /*
    vytvorte cyklus v ktorom vypíšete
    všetky čísla od 0 po nádhodné číslo od 0 po 1000
    pričom ak náhodné číslo bude párne, tak
    chceme vypísať všetky párne čísla od 0 po náhodné číslo
    ak náhodné číslo bude nepárne, tak chceme vypísať všetky nepárne čísla od 0 po náhodné číslo
    odstrániť poslednú čiarku za posledným číslom

    NADSTAVBA resp. bonus
    každé piate číslo bude mať nádhodnú veľkosť písma a náhodnú farbu

    */
    echo "<br>";
$nahodneCislo = rand(0, 1000);
echo "Náhodné číslo: " . $nahodneCislo . "<br>";

if ($nahodneCislo % 2 == 0) {
    echo "Náhodné číslo je párne. <br> Vypisujem párne čísla:<br>";
    for ($i = 0; $i <= $nahodneCislo; $i += 2) {
        if ($i < $nahodneCislo) {
            echo $i . ", ";
        } else {
            echo $i; 
        }
    }
} else {
    echo "Náhodné číslo je nepárne. <br> Vypisujem nepárne čísla:<br>";
    for ($i = 1; $i <= $nahodneCislo; $i += 2) {    
        if ($i < $nahodneCislo - 1) {
            echo $i . ", "; 
        } else {
            echo $i; 
        }
    }
}
    

    ?>