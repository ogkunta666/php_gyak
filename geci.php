<?php
//Ha GET és POST is lehet
if (isset($_REQUEST["name"])){
    $name = htmlspecialchars($_REQUEST["name"]);
    $pass = $_GET["password"];
    echo "Hello, $name! A jelszavad: $pass";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Név:</label>
        <input type="text" id="name" name="name">
        <label for="password">Jelszó:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Küldés">
    </form>
</body>
</html>