<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primarni brojevi</title>
</head>
<body>
    <h1>Primarni brojevi u rasponu</h1>
    <p>Unesite raspon brojeva u URL-u kao query string, npr.: <code>?pocetak=10&kraj=50</code></p>

    <?php
    // Preuzimanje parametara iz query stringa
    $pocetak = isset($_GET["pocetak"]) ? (int)$_GET["pocetak"] : null;
    $kraj = isset($_GET["kraj"]) ? (int)$_GET["kraj"] : null;

    if ($pocetak !== null && $kraj !== null) {
        if ($pocetak > $kraj) {
            echo "<p>Početni broj mora biti manji ili jednak završnom broju.</p>";
        } else {
            echo "<p>Primarni brojevi u rasponu od $pocetak do $kraj su:</p><ul>";

            for ($broj = $pocetak; $broj <= $kraj; $broj++) {
                if (isPrimarni($broj)) {
                    echo "<li>$broj</li>";
                }
            }

            echo "</ul>";
        }
    } else {
        echo "<p>Molimo unesite parametre <code>pocetak</code> i <code>kraj</code> u query stringu.</p>";
    }

    // Funkcija koja provjerava je li broj primaran
    function isPrimarni($broj) {
        if ($broj < 2) {
            return false; // Brojevi manji od 2 nisu primarni
        }
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i === 0) {
                return false;
            }
        }
        return true;
    }
    ?>
</body>
</html>
