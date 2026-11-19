<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
    $pole = array("Peter", "Juraj", "Ján");
    echo $pole[1];

    echo "<br>";

    foreach($pole as $prvok){
        echo $prvok . " ";
    }

    /*
    Vytvorte pole náhodných čísel od 0 po 100.
    Počet čísel: 10
    Ak čísla v poli sú rovnaké, pusť pesničku.
    */

    /*<audio controls autoplay>
        <source src=""C:\Users\tobia\Downloads\v dolinach (text lyrics).mp3"" type="audio/.mp3">
    </audio>*/

    $nahodne_cisla = array();
    for($i = 0; $i < 10; $i++){
        $nahodne_cisla[] = rand(0, 100);
    }

    echo "<br>";
    foreach($nahodne_cisla as $cislo){
        echo $cislo . " ";
    }

    ?>
</body>
</html>