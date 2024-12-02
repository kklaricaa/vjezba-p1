<?php
// Definicija niza s danima u tjednu na hrvatskom jeziku
$tjedan = [
    "Nedjelja", // 0
    "Ponedjeljak", // 1
    "Utorak", // 2
    "Srijeda", // 3
    "Četvrtak", // 4
    "Petak", // 5
    "Subota" // 6
];

// Dohvaćanje trenutnog dana u tjednu (0 = Nedjelja, 1 = Ponedjeljak, itd.)
$trenutni_dan = date("w");

// Ispis dana u tjednu na hrvatskom jeziku
echo "Danas je " . $tjedan[$trenutni_dan] . ".";
?>