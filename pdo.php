
<?php
//data source name
$dsn = 'mysql:host=localhost;dbname=buissnescards;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);

    //Hiba mód : exception dobása hiba esetén
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás";
} catch (PDOException $e) {
    echo 'Kapcsolodasi hiba: ' . $e->getMessage();
    exit();
}


?>