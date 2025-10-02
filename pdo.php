
<?php
//data source name
$dsn = 'mysql:host=localhost;dbname=buissnescards;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);

    //Hiba mód : exception dobása hiba esetén
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás\n";
    sql_injection($pdo);
} catch (PDOException $e) {
    echo 'Kapcsolodasi hiba: ' . $e->getMessage();
    exit();
}


function xss($pdo)
{
$name = "xyz";
 $companyName = "xyz bt";
 $phone = "123123123";
 $email = "xyz@qwer.com";
 $photo =null;
 //$status =?
 $note ="hivatasos pornoszinesz";

/*$sql = "INSERT INTO cards(`name`, `companyName`,`phone`,`email`,`photo`,`note`)
        VALUES ('$name', '$companyName', '$phone', '$email', '$photo', '$note')"; */

//$pdo->exec($sql);


$sql = "INSERT INTO cards(`name`, `companyName`,`phone`,`email`,`photo`,`note`)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $companyName, $phone, $email, $photo, $note]);

/////
$sql = "SELECT * FROM cards WHERE name = 'xyz'";
$result = $pdo->query($sql);
$card = $result->fetch(PDO::FETCH_ASSOC);

echo "<br>";
print_r($card);

}
 
function sql_injection($pdo)
{
    $name_i = "' OR '1'='1";
    $sql = "SELECT * FROM cards WHERE name = '$name_i'";
    $result = $pdo->query($sql);
    $card = $result->fetchAll(PDO::FETCH_ASSOC);

    echo "<br>";
    print_r($card);
}


?>