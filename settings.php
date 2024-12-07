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

    if(isset($_POST["verzend"]))
    {
        $_SESSION["fruit-diff"] = $_POST["user-fruit-diff"];
        $_SESSION["numpy-diff"] = $_POST["user-numpy-diff"];
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
    <title>MemoryLane - Settings</title>
    <link rel="stylesheet" href="settings-styles.css">
</head>
<body>
    <div class="header">
        <h1>MemoryLane</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
    <div class="main">
        <form method="POST">
            <h2>Choose Fruit difficulty</h2>
            <select name="user-fruit-diff">
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
            </select>
            <h2>Choose Numpy difficulty</h2>
            <select name="user-numpy-diff">
                <option value="easy">Easy</option>
                <option value="medium">Medium</option>
                <option value="hard">Hard</option>
            </select><br><br>
            <input type="submit" name="verzend" value="Opslaan" />
        </form>
        <?php
            echo "Fruitje: " . $_SESSION["fruit-diff"] . "<br>";
            echo "Numpy: " . $_SESSION["numpy-diff"] . "<br>";
        ?>
    </div>
</body>
</html>