<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>server tomb informacioi</h2>
    <ul>
        <li><strong>Kérés módja: <?php echo $_SERVER['REQUEST_METHOD']; ?></strong></li>
        <li><strong>Kért url: <?php echo $_SERVER['REQUEST_URI']; ?></strong></li>
        <li><strong>Szkript neve: <?php echo $_SERVER['PHP_SELF']; ?></strong></li>
        <li><?php
        if (empty($_SERVER['QUERY_STRING'])) {
            echo "Nincsen query string.";
            } else {
         echo "Van query string: " . $_SERVER['QUERY_STRING'];
        }
        ?></li>
    </ul>


    <h3>Szerver adatai</h3>
    <ul>
        <li><strong>Szerver név: <?php echo $_SERVER['SERVER_NAME']; ?></strong></li>
        <li><strong>Szerver IP cím: <?php echo $_SERVER['SERVER_ADDR']; ?></strong></li>
        <li><strong>Szerver szoftver: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></strong></li>
        <li><strong>Dokumentum gyökérkönyvtár: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></strong></li>
        <li><strong>PHP verzió: <?php echo phpversion(); ?></strong></li>



     <h3>Felhasználó adatok</h3>
        <ul>
            <li><strong>Felhasználó IP cím: <?php echo $_SERVER['REMOTE_ADDR']; ?></strong></li>
            <li><strong>Felhasználó böngészője: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></strong></li>
        </ul>


        <p>
            <a href="?name&age=22">Kattints ide egy parameterezett GET kereser</a>
        </p>
</body>



</html>