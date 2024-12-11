<?php
session_start();

// Controleer of de sessie bestaat
if (!isset($_SESSION['numbers']) || !isset($_SESSION['sum'])) {
    header("Location: index.php");
    exit();
}

// Feedbackbericht
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userAnswer = (int)$_POST['userAnswer'];
    if ($userAnswer === $_SESSION['sum']) {
        $message = "Correct! De som van de nummers is {$_SESSION['sum']}.";
    } else {
        $message = "Incorrect. Het juiste antwoord was {$_SESSION['sum']}.";
    }

    // Reset de sessie voor een nieuwe ronde
    unset($_SESSION['numbers']);
    unset($_SESSION['sum']);
    // header("refresh:5;url=index.php"); // Doorverwijzen naar een nieuwe ronde
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controleer je Antwoord</title>
    <link rel="stylesheet" href="Numpje-style.css">
</head>
<body>
    <div class="header">
        <h1>MermoryLane</h1>
        <ul>
            <li><a href="index.php">home</a></li>
        </ul>
    </div>
    <h1>Wat is de som van de nummers?</h1>
    <form method="post" action="">
        <input type="number" name="userAnswer" required placeholder="Typ je antwoord">
        <button type="submit">Controleren</button>
    </form>
    <?php if (!empty($message)): ?>
        <div class="message">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>
</body>
</html>

