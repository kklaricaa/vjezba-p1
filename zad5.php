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
    $datumZa10Godina = date("d-m-Y", strtotime("+10 years"));

    // Dan u tjednu za 10 godina (0 = Nedjelja, 1 = Ponedjeljak, itd.)
    $danUTjednuIndex = date("w", strtotime($datumZa10Godina));

    // Ispis dana u tjednu
    echo "<p>Danas je datum: $danas</p>";
    echo "<p>Za 10 godina bit će: $datumZa10Godina</p>";
    echo "<p>Dan u tjednu za 10 godina bit će: <strong>{$tjedan[$danUTjednuIndex]}</strong>.</p>";
    ?>
</body>
</html>
