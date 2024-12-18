<?php
    session_start();
    $aantalAppel = $_SESSION["aantalAppel"];
    $aantalBanaan = $_SESSION["aantalBanaan"];
    $aantalPeer = $_SESSION["aantalPeer"];
    $aantalSinaasappel = $_SESSION["aantalSinaasappel"];
    $aantalWatermeloen = $_SESSION["aantalWatermeloen"];
?>
<script>
    console.log(<?= json_encode($_SESSION["fruit-diff"]); ?>);
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultaten fruit</title>
    <link rel="stylesheet" href="fruit-styles.css">
</head>
<body>
    <div class="header">
        <h1>MemoryLane</h1>
        <ul>
            <li><a href="index.php">home</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="resultaten-fruitje">
            <form action="" method="post">
                Aantal appels: <input type="number" name="userAppels" required /><br>
                Aantal bananen: <input type="number" name="userBananen" required /><br>
                Aantal Peren: <input type="number" name="userPeren" required /><br>
                Aantal Sinaasappels: <input type="number" name="userSinaasappels" required /><br>
                Aantal Watermeloen: <input type="number" name="userWatermeloen" required /><br>
                <input type="submit" name="verzend" value="Check" />
            </form>
            <?php
                if (isset($_POST["verzend"]))
                {
                    $userAppels = $_POST["userAppels"];
                    $userBananen = $_POST["userBananen"];
                    $userPeren = $_POST["userPeren"];
                    $userSinaasappels = $_POST["userSinaasappels"];
                    $userWatermeloen = $_POST["userWatermeloen"];

                    if ($aantalAppel == $userAppels)
                    {
                        echo "<p name='correct'>Appel: correct, jij had: $userAppels echt aantal: $aantalAppel</p>";
                    }
                    else
                    {
                        echo "<p name='incorrect'>Appel: incorrect, jij had: $userAppels echt aantal: $aantalAppel</p>";
                    }

                    if($aantalBanaan == $userBananen)
                    {
                        echo "<p name='correct'>Banaan: correct, jij had: $userBananen echt aantal: $aantalBanaan</p>";
                    }
                    else
                    {
                        echo "<p name='incorrect'>Banaan: incorrect, jij had: $userBananen echt aantal: $aantalBanaan</p>";
                    }

                    if($aantalPeer == $userPeren)
                    {
                        echo "<p name='correct'>Peer: correct, jij had: $userPeren echt aantal: $aantalPeer</p>";
                    }
                    else
                    {
                        echo "<p name='incorrect'>Peer: incorrect, jij had: $userPeren echt aantal: $aantalPeer</p>";
                    }

                    if($aantalSinaasappel == $userSinaasappels)
                    {
                        echo "<p name='correct'>Sinaasappel: correct, jij had: $userSinaasappels echt aantal: $aantalSinaasappel</p>";
                    }
                    else
                    {
                        echo "<p name='incorrect'>Sinaasappel: incorrect, jij had: $userSinaasappels echt aantal: $aantalSinaasappel</p>";
                    }

                    if($aantalWatermeloen == $userWatermeloen)
                    {
                        echo "<p name='correct'>Sinaasappel: correct, jij had: $userWatermeloen echt aantal: $aantalWatermeloen</p>";
                    }
                    else
                    {
                        echo "<p name='incorrect'>Sinaasappel: incorrect, jij had: $userWatermeloen echt aantal: $aantalWatermeloen</p>";
                    }
                }
            
        ?>
        </div>
    </div>

</body>
</html>