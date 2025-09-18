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
        <li><strong>Query string: <?php echo $_SERVER['QUERY_STRING']; ?></strong></li>
    </ul>
</body>
</html>