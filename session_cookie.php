<?php

//Session indítása
session_start();

//session
if (isset($_POST["session_name"]) && !empty($_POST["session_name"])){
    $_SESSION["name"] = ($_POST["session_name"]);
    echo "Sikeresen beállítottad a sessiont: " . $_SESSION["name"] . "<br>";
} 

//cookie beállítása
$cookie_name = "user_name";
$cookie_value = "Tibi";
$cookie_time = time() + (86400 * 30); // 30 napig tarolja 

if (isset($_POST["cookie_value"]) && !empty($_POST["cookie_value"])){
    setcookie($cookie_name, $_POST["cookie_value"], $cookie_time, "/"); 
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


<form action="" method="post">
    <label for="cookie_value">Add meg a neved a cookiehoz</label>
    <input type="text" id="cookie_value" name="cookie_value" required>
    <input type="submit" value="Küldés">
</form>


<a href="?torles">Session torlese</a>

<?php
 if (isset($_GET["torles"])){
    session_unset(); //session változók törlése
    session_destroy(); //session megszüntetése
    echo "A session törölve lett";
 }
?>
</body>
</html>