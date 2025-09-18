<?php

//Session indítása
session_start();

//session
if (isset($_POST["session_name"]) && !empty($_POST["session_name"])){
    $_SESSION["name"] = ($_POST["session_name"]);
    echo "Sikeresen beállítottad a sessiont: " . $_SESSION["name"] . "<br>";
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_Cookie</title>
</head>
<body>
    <h2>Session</h2>
    <form action="" method="post">
        <label for="session_name">Add meg a neved a sessionhöz</label>
        <input type="text" id="session_name" name="session_name" required>
        <input type="submit" value="Küldés">
    </form>

    <?php
    if (isset($_SESSION["name"])){
        echo "A sessionben tárolt név: " . $_SESSION["name"] . "<br>";
    }
    ?>
</body>
</html>