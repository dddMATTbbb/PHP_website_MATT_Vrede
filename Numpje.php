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

$wachtTijd = 10;

if ($_SESSION["numpy-diff"] == "easy")
{
    $wachtTijd = 15;
}
elseif ($_SESSION["numpy-diff"] == "medium")
{
    $wachtTijd = 10;
}
elseif ($_SESSION["numpy-diff"] == "hard")
{
    $wachtTijd = 5;
}
else
{
    $wachtTijd = 10;
}

print_r($wachtTijd);

// Genereer nummers en sla deze op in de sessie
$numbers = generateNumbers();
$_SESSION['numbers'] = $numbers;
$_SESSION['sum'] = array_sum($numbers);

// Automatisch doorverwijzen naar check.php na 10 seconden
header("refresh:$wachtTijd;url=check.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MermoryLane</title>
    <link rel="stylesheet" href="Numpje-style.css">
</head>
<body>
    <h1>Onthoud de nummers!</h1>
    <div class="container">
        <?php foreach ($numbers as $number): ?>
            <div class="box"><?php echo $number; ?></div>
        <?php endforeach; ?>
    </div>
    <div class="message">
        <?php echo 'Na '.$wachtTijd. ' seconden word je doorgestuurd om het antwoord te geven.'?>
    </div>
</body>
</html>
