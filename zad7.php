<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tjedan datuma</title>
</head>
<body>
    <h1>Datumi za tjedan s određenim datumom</h1>
    <p>Unesite datum u URL-u kao GET varijablu, primjer: <code>?datum=2024-12-03</code></p>

    <?php
    // Provjera je li GET parametar "datum" zadan
    if (isset($_GET["datum"])) {
        $datum = $_GET["datum"];

        // Provjera je li datum u ispravnom formatu
        if (DateTime::createFromFormat('Y-m-d', $datum)) {
            $dateTime = new DateTime($datum);

            // Pronalazak ponedjeljka tekućeg tjedna
            $danUTjednu = $dateTime->format('N'); // 1 = ponedjeljak, 7 = nedjelja
            $pocetakTjedna = clone $dateTime;
            $pocetakTjedna->modify('-' . ($danUTjednu - 1) . ' days');

            // Ispis svih dana od ponedjeljka do nedjelje
            echo "<h2>Datumi za tjedan u kojem je datum: {$datum}</h2>";
            echo "<ul>";
            for ($i = 0; $i < 7; $i++) {
                $trenutniDatum = clone $pocetakTjedna;
                $trenutniDatum->modify("+$i days");
                $nazivDana = $trenutniDatum->format('l'); // Naziv dana na engleskom
                echo "<li>" . $trenutniDatum->format('Y-m-d') . " - $nazivDana</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Molimo unesite ispravan datum u formatu YYYY-MM-DD.</p>";
        }
    } else {
        echo "<p>Datum nije zadan. Dodajte ga u URL kao <code>?datum=YYYY-MM-DD</code>.</p>";
    }
    ?>
</body>
</html>
