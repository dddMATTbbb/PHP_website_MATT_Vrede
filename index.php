<?php
    session_start();
    
    if (!isset($_SESSION["fruit-diff"]))
    {
        $_SESSION["fruit-diff"] = "medium";
    }

    if (!isset($_SESSION["numpy-diff"]))
    {
        $_SESSION["numpy-diff"] = "medium";
    }
?>
<script>
    console.log(<?= json_encode($_SESSION["fruit-diff"]); ?>);
</script>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spel</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<nav class="sidebar">
    <div class="logo-menu">
        <h2 class="logo">MemoryLane</h2>
        <i class='bx bx-menu toggle-btn'></i>
    </div>

    <ul class="list">
        <li class="list-item active">
            <a href="credits.php">
                <i class='bx bx-buildings' style='color:#ffffff'  ></i>
               <span class="link-name" style="--i:1;">Menu</span> 
            </a>
        </li>
        <li class="list-item">
            <a href="uitleg-spel-fruit.php">
                <i class='bx bx-game'></i>
               <span class="link-name" style="--i:2;">Fruitje</span>
            </a>
        </li>
        
        <li class="list-item">
            <a href="Numpje.php">
                <i class='bx bx-ghost'></i>
               <span class="link-name" style="--i:3;">Numpje</span>
            </a>
        </li>
        <li class="list-item">
            <a href="credits.php">
               <i class='bx bx-user' ></i>
               <span class="link-name" style="--i:4;">Credits</span> 
            </a>
        </li>
        <li class="list-item">
            <a href="settings.php">
               <i class='bx bx-chat' ></i>
               <span class="link-name" style="--i:5;">Settings</span> 
            </a>
        </li>
    </ul>
</nav>

    <script src="script.js"></script>
</body>
<?php
    echo "hello world"
?>
</html>