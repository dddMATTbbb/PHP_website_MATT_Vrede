<?php
session_start();

// Controleer of de sessie nog geen willekeurige afbeeldingen heeft gegenereerd
if (!isset($_SESSION["beeldenGeplaatst"])) {
    $_SESSION["aantalAppel"] = 0; // Reset het aantal appels aan het begin van de sessie
    $_SESSION["beelden"] = [];   // Hier slaan we de gegenereerde plaatjes op

    // Genereer de willekeurige plaatjes en sla ze op in de sessie
    for ($x = 0; $x <= 29; $x++) {
        $plaatje = rand(1, 5);
        $_SESSION["beelden"][] = $plaatje;

        if ($plaatje == 1) {
            $_SESSION["aantalAppel"]++;
        }
    }

    $_SESSION["beeldenGeplaatst"] = true; // Markeer dat de plaatjes zijn gegenereerd
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemoryLane</title>
    <link rel="stylesheet" href="spel-styles.css">
</head>
<body>
    <div class="header">
        <h1>MemoryLane</h1>
        <ul>
            <li><a href="index.php">home</a></li>
        </ul>
    </div>
    <div class="main">
        <?php
        // Toon de opgeslagen plaatjes uit de sessie
        foreach ($_SESSION["beelden"] as $plaatje) {
            switch ($plaatje) {
                case 1: echo "<img src='img/appel.jpg'>"; break;
                case 2: echo "<img src='img/banaan.jpg'>"; break;
                case 3: echo "<img src='img/peer.jpg'>"; break;
                case 4: echo "<img src='img/sinaasappel.jpg'>"; break;
                case 5: echo "<img src='img/watermeloen.jpg'>"; break;
            }
        }

        // Verwerk de invoer van de gebruiker
        if (isset($_POST["verzend"])) {
            $userAppel = isset($_POST["aantal-appel"]) ? (int)$_POST["aantal-appel"] : -1;

            if ($userAppel === $_SESSION["aantalAppel"]) {
                echo "<p style='color: green;'>Correct! Het aantal appels is $userAppel.</p>";
            } else {
                echo "<p style='color: red;'>Incorrect! Het aantal appels is {$_SESSION["aantalAppel"]}.</p>";
            }

            // Reset de sessie om een nieuw spel te starten
            session_destroy();
        }
        ?>

        <form action="test.php" method="post">
            <label for="aantal-appel">Hoeveel appels:</label>
            <input type="number" name="aantal-appel" id="aantal-appel" required /><br /> 
            <input type="submit" name="verzend" value="Check" />
        </form>
    </div>
</body>
</html>
