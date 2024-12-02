<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dan za 10 godina</title>
</head>
<body>
    <h1>Dan u tjednu za 10 godina</h1>
    <?php
    // Niz za hrvatske nazive dana u tjednu
    $tjedan = [
        "Nedjelja", 
        "Ponedjeljak", 
        "Utorak", 
        "Srijeda", 
        "Četvrtak", 
        "Petak", 
        "Subota"
    ];

    // Trenutni datum
    $danas = date("d-m-Y");

    // Datum za 10 godina
    $datumZa10Godina = strtotime("+10 years");

    // Dan u tjednu za 10 godina (0 = Nedjelja, 1 = Ponedjeljak, itd.)
    $danUTjednuIndex = date("w", $datumZa10Godina);

    // Ispis dana u tjednu
    echo "<p>Danas je datum: $danas</p>";
    echo "<p>Za 10 godina bit će: " . date("d-m-Y", $datumZa10Godina) . "</p>";
    echo "<p>Dan u tjednu za 10 godina bit će: <strong>{$tjedan[$danUTjednuIndex]}</strong>.</p>";

    // Petlja za sljedećih 7 dana
    echo "<ul>";
    for ($i = 0; $i <= 7; $i++) {
        // Dodavanje $i dana na početni datum
        $trenutniDatum = strtotime("+$i days", $datumZa10Godina);
        $danUTjednuIndex = date("w", $trenutniDatum);
        echo "<li>" . date("d-m-Y", $trenutniDatum) . " - {$tjedan[$danUTjednuIndex]}</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
