<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brojevi djeljivi sa sedam</title>
</head>
<body>
    <h1>Brojevi djeljivi sa sedam</h1>
    <p>Unesite raspon u URL-u kao GET varijable, primjer: <code>?pocetak=50&kraj=150</code>.</p>
    <?php
    // Dohvaćanje raspona iz GET varijabli
    $pocetak = isset($_GET["pocetak"]) ? (int)$_GET["pocetak"] : 1;
    $kraj = isset($_GET["kraj"]) ? (int)$_GET["kraj"] : 100;

    // Provjera i zamjena vrijednosti ako je početak veći od kraja
    if ($pocetak < $kraj) {
        $temp = $pocetak;
        $pocetak = $kraj;
        $kraj = $temp;
    }

    echo "<ul>";
    // Ispis brojeva u rasponu od najvećeg do najmanjeg
    for ($i = $pocetak; $i >= $kraj; $i--) {
        if ($i % 7 === 0) {
            // Određivanje boje
            $boja = "";
            if ($i % 3 === 0 && $i % 5 === 0) {
                $boja = "green"; // Djeljivo s 3 i 5
            } elseif ($i % 3 === 0) {
                $boja = "red"; // Djeljivo s 3
            } elseif ($i % 5 === 0) {
                $boja = "blue"; // Djeljivo s 5
            }
            // Ispis s bojom
            echo "<li style='color: $boja;'>$i</li>";
        }
    }
    echo "</ul>";
    ?>
</body>
</html>
