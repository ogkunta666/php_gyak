<?php

//Controller


// Egyszerű autoloader a kód betöltéséhez a mappaszerkezet alapján.
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use App\Models\BusinessCard;
use App\Services\CardManager;
//use PDO;

//Adatbázis konfig (.env)
$dbHost = 'localhost';
$dbName = 'business_cards';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO ("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás az adatbázishoz!<br>";
} catch (PDOException $ex) {
    die("Adatbázis kapcsolat hiba: " . $ex->getMessage());
}
?>