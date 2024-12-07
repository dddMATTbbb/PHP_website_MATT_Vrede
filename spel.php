<?php
    session_start();

    $_SESSION["aantalAppel"] = 0;
    $_SESSION["aantalBanaan"] = 0;
    $_SESSION["aantalPeer"] = 0;
    $_SESSION["aantalSinaasappel"] = 0;
    $_SESSION["aantalWatermeloen"] = 0;


    $aantalAppel = $_SESSION["aantalAppel"];
    $aantalBanaan = $_SESSION["aantalBanaan"];
    $aantalPeer = $_SESSION["aantalPeer"];
    $aantalSinaasappel = $_SESSION["aantalSinaasappel"];
    $aantalWatermeloen = $_SESSION["aantalWatermeloen"];

    $aantalPlaatjes = 19;

    if ($_SESSION["fruit-diff"] == "easy")
    {
        $aantalPlaatjes = 9;
    }
    elseif($_SESSION["fruit-diff"] == "medium")
    {
        $aantalPlaatjes = 19;
    }
    elseif($_SESSION["fruit-diff"] == "hard")
    {
        $aantalPlaatjes = 29;
    }
    else
    {
        $aantalPlaatjes = 19;
    }
?>
<script>
    console.log(<?= json_encode($_SESSION["fruit-diff"]); ?>);
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemoryLane</title>
    <link rel="stylesheet" href="fruit-styles.css">
</head>
<body>
    <div class="header">
        <h1>MemoryLane</h1>
    </div>
    <div class="main">
    <?php
        for($x = 0; $x <= $aantalPlaatjes; $x++){
            $plaatje = rand(1,5);
            switch("$plaatje")
            {
                case "1": echo "<img src='img/appel.jpg'>"; $aantalAppel++; break;
                case "2": echo "<img src='img/banaan.jpg'>"; $aantalBanaan++; break;
                case "3": echo "<img src='img/peer.jpg'>"; $aantalPeer++; break;
                case "4": echo "<img src='img/sinaasappel.jpg'>"; $aantalSinaasappel++; break;
                case "5": echo "<img src='img/watermeloen.jpg'>" ; $aantalWatermeloen++; break;
            }
        }
        $_SESSION["aantalAppel"] = $aantalAppel;
        $_SESSION["aantalBanaan"] = $aantalBanaan;
        $_SESSION["aantalPeer"] = $aantalPeer;
        $_SESSION["aantalSinaasappel"] = $aantalSinaasappel;
        $_SESSION["aantalWatermeloen"] = $aantalWatermeloen;
        echo $_SESSION['aantalAppel'];
    ?>
    </div>
    <script>
        setTimeout(() => {
            window.location.href = "resultaten-fruit.php";
            }, 5000); // Redirects after 5 seconds
    </script>
</body>
</html>