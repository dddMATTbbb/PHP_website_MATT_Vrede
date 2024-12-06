<?php
session_start();

// Functie om willekeurige nummers te genereren
function generateNumbers($count = 16, $min = 1, $max = 50) {
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = rand($min, $max);
    }
    return $numbers;
}

// Genereer nummers en sla deze op in de sessie
$numbers = generateNumbers();
$_SESSION['numbers'] = $numbers;
$_SESSION['sum'] = array_sum($numbers);

// Automatisch doorverwijzen naar check.php na 10 seconden
header("refresh:10;url=check.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4x4 Raster</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Onthoud de nummers!</h1>
    <div class="container">
        <?php foreach ($numbers as $number): ?>
            <div class="box"><?php echo $number; ?></div>
        <?php endforeach; ?>
    </div>
    <div class="message">
        Na 10 seconden word je doorgestuurd om het antwoord te geven.
    </div>
</body>
</html>
