
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


 $name = "xyz";
 $companyName = "xyz bt";
 $phone = "123123123";
 $email = "xyz@qwer.com";
 $photo =null;
 //$status =?
 $note ="hivatasos pornoszinesz";

$sql = "INSERT INTO cards(`name`, `companyName`,`phone`,`email`,`photo`,`note`)
        VALUES ('$name', '$companyName', '$phone', '$email', '$photo', '$note')"; 

$pdo->exec($sql);

$sql = "SELECT * FROM cards WHERE id = 11";
$result = $pdo->query($sql);
$card = $result->fetch(PDO::FETCH_ASSOC);
?>