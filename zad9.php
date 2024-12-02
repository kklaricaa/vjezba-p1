<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šahovska tablica</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
        }
        .crna {
            background-color: black;
        }
        .bijela {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Šahovska tablica</h1>
    <p>Unesite vrijednosti za broj redaka i stupaca u URL-u, primjer: <code>?x=8&y=8</code>.</p>

    <?php
    // Dohvaćanje vrijednosti GET varijabli
    $x = isset($_GET["x"]) ? (int)$_GET["x"] : 8; // Broj redaka, zadano 8
    $y = isset($_GET["y"]) ? (int)$_GET["y"] : 8; // Broj kolona, zadano 8

    // Postavljanje maksimalnih dimenzija na 10x10
    $x = min($x, 10);
    $y = min($y, 10);

    echo "<table border='1'>";
    for ($i = 0; $i < $x; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $y; $j++) {
            // Provjera za šahovski uzorak
            $class = ($i + $j) % 2 === 0 ? "bijela" : "crna";
            echo "<td class='$class'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
