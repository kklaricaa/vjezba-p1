<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun potencije</title>
</head>
<body>
    <h1>Izračun potencije</h1>
    <p>Unesite bazu i eksponent u URL-u kao query string, npr.: <code>?baza=2&eksponent=3</code></p>

    <?php
    // Preuzimanje parametara iz query stringa
    $baza = isset($_GET["baza"]) ? (float)$_GET["baza"] : null;
    $eksponent = isset($_GET["eksponent"]) ? (int)$_GET["eksponent"] : null;

    if ($baza !== null && $eksponent !== null) {
        // Izračun potencije pomoću množenja
        $rezultat = 1;

        if ($eksponent > 0) {
            for ($i = 0; $i < $eksponent; $i++) {
                $rezultat *= $baza;
            }
        } elseif ($eksponent < 0) {
            for ($i = 0; $i < abs($eksponent); $i++) {
                $rezultat *= $baza;
            }
            $rezultat = 1 / $rezultat; // Inverz za negativni eksponent
        } else {
            $rezultat = 1; // Svaki broj na potenciju 0 je 1
        }

        echo "<p>Rezultat potencije $baza<sup>$eksponent</sup> je: $rezultat</p>";
    } else {
        echo "<p>Molimo unesite parametre <code>baza</code> i <code>eksponent</code> u query stringu.</p>";
    }
    ?>
</body>
</html>
