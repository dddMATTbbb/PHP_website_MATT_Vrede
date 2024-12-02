<?php
    session_start();

    $_SESSION["aantalAppel"] = 0;


    $aantalAppel = $_SESSION["aantalAppel"];
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
        for($x = 0; $x <= 29; $x++){
            $plaatje = rand(1,5);
            switch("$plaatje")
            {
                case "1": echo "<img src='img/appel.jpg'>"; $aantalAppel++; break;
                case "2": echo "<img src='img/banaan.jpg'>"; break;
                case "3": echo "<img src='img/peer.jpg'>";  break;
                case "4": echo "<img src='img/sinaasappel.jpg'>"; break;
                case "5": echo "<img src='img/watermeloen.jpg'>" ; break;
            }
        }
        $_SESSION["aantalAppel"] = $aantalAppel;
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