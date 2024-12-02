<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pozdrav</title>
</head>
<body>
    <form action="" method="post">
        <label for="ime">Unesite ime:</label>
        <input type="text" id="ime" name="ime" required>
        <br><br>
        <label for="ponovi">Koliko puta ponoviti:</label>
        <input type="number" id="ponovi" name="ponovi" min="1" required>
        <br><br>
        <button type="submit">Pošalji</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $ime = $_POST["ime"] ?? "";
        $ponovi = $_POST["ponovi"] ?? 0;

        if (empty($ime)) {
            echo "<p>Upišite ime.</p>";
        } else {
            $ponovi = (int)$ponovi;
            for ($i = 0; $i < $ponovi; $i++) {
                echo "<p>Dobar dan $ime!</p>";
            }
        }
    }
    ?>
</body>
</html>