<?php
    session_start();
    $aantalAppel = $_SESSION["aantalAppel"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultaten fruit</title>
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
        <form action="" method="post">
            Aantal appels: <input type="number" name="userAppels" required /><br>
            Aantal bananen: <input type="number" name="userBananen" required /><br>
            Aantal peren: <input type="number" name="userPeren" required /><br>
            Aantal sinaasappels: <input type="number" name="userSinaasappels" required /><br>
            Aantal watermeloen: <input type="number" name="userAppels" required /><br>
            <input type="submit" name="verzend" value="Check" />
        </form>
    </div>
    <?php
    if (isset($_POST["verzend"]))
    {
        $echteAppels = $_SESSION["aantalAppel"];
        $userAppels = $_POST["userAppels"];

        if ($aantalAppel == $userAppels)
        {
            echo "correct, jij had: $userAppels echt aantal: $aantalAppel";
        }
        else
        {
            echo "incorrect, jij had: $userAppels echt aantal: $aantalAppel";
        }
    }
    
    ?>
</body>
</html>