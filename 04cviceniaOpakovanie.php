<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // ÚLOHA 1
  /*
  Vytvorte cyklus od 50 do -20
  a vypíšte všetky čísla v postupnosti 0,5
  Výsledok: 50, 49,5, 49, 48,5 ... -19,5, -20
  */
  for($i = 50; $i >= -20; $i = $i - 0.5) {
    echo $i . ", ";
  }
echo "<br>";
echo "<br>";
  // ÚLOHA 2
  /*
  Pole [4, 23, 56, 23, 5, 66, 12, 2]
  V cykle prejdite všetky prvky poľa a sčítajte
  všetky párne čísla a nepárne čísla zvlášť.
  Výsledok: 
  Súčet párnych: 4 + 56 + 66 + 12 + 2 = 140
  Súčet nepárnych: 23 + 23 + 5 = 51
  */
$pole = [4, 23, 56, 23, 5, 66, 12, 2];
$sucetParne = 0;
$sucetNeparne = 0;
$textParne = "";
$textNeparne = "";

for ($i = 0; $i < count($pole); $i++) {
    if ($pole[$i] % 2 == 0) {
        $sucetParne = $sucetParne + $pole[$i];
        if ($textParne == "") {
            $textParne = $pole[$i];
        } else {
            $textParne = $textParne . " + " . $pole[$i];
        }
    } else {
        $sucetNeparne = $sucetNeparne + $pole[$i];
        if ($textNeparne == "") {
            $textNeparne = $pole[$i];
        } else {
            $textNeparne = $textNeparne . " + " . $pole[$i];
        }
    }
}

echo "Súčet párnych: " . $textParne . " = " . $sucetParne . "<br>";
echo "Súčet nepárnych: " . $textNeparne . " = " . $sucetNeparne;

  // ÚLOHA 3
  /*
  V cykle načítajte 10 náhodných čísel 
  v rozsahu od 0 do 1. 
  Pokiaľ je hodnota 0, vypíšte výsledok ako červenú bodku
  Pokiaľ je hodnota 1, vypíšte výsledok ako zelenú bodku
  Napr. vygenerované [0,1,1,0,1,0,1,0,0,0] 
  Výsledok: [•(R), •(G),•(G), •(R), ...]
  */

echo "<br>";
echo "<br>";

  $nahodne = [];
echo "Vygenerované: [";
for ($i = 0; $i < 10; $i++) {
    $cislo = rand(0, 1);
    $nahodne[$i] = $cislo;
    if ($i < 9) {
        echo $cislo . ", ";
    } else {
        echo $cislo;
    }
}
echo "]<br>";

echo "Výsledok: [";
for ($i = 0; $i < 10; $i++) {
    if ($nahodne[$i] == 0) {
        echo '<span class="dot-red">&#9679;</span>(R)';
    } else {
        echo '<span class="dot-green">&#9679;</span>(G)';
    }
    if ($i < 9) {
        echo ", ";
    }
}
echo "]";
echo "<br>";
echo "<br>";
  // ÚLOHA 4
  /*
  Načítajte 4 čísla do poľa o 0 do 10. 
  Načítajte číslo premennej target (súčet možných čísel v poli)
  Vo výstupe by ste mali nájsť tú Nticu čísel, 
  ktorá vám tvorí hodnotu premennej target.

  Vstup: nums = [2,7,11,15], target = 9
  Výstup: [0,1]

  Vstup: nums = [3,2,4], target = 6
  Výstup: [1,2]
  */

$nums = [];
for ($i = 0; $i < 4; $i++) {
    $nums[$i] = rand(0, 10);
}
$target = rand(0, 40);

echo "Vstup: nums = [" . $nums[0] . ", " . $nums[1] . ", " . $nums[2] . ", " . $nums[3] . "], target = " . $target . "<br>";

$najdene = false;
for ($i = 0; $i < count($nums); $i++) {
    for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == $target) {
            echo "Výstup: [" . $i . ", " . $j . "]";
            $najdene = true;
            break 2;
        }
    }
}

if ($najdene == false) {
    echo "Výstup: Žiadna dvojica čísel netvorí súčet target.";
}

  ?>
</body>
</html>