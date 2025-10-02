
<?php

$dsn = 'mysql:host=localhost;dbname=buissnescards;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);

    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás\n";
    
    checked_insert($pdo);
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
 $note ="hivatasos pornoszinesz";




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

function prepared_statement($pdo)
{
 $name_i = "' OR '1'='1";
    $sql = "SELECT * FROM cards WHERE name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name_i]);
    $card = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<br>";
    print_r($card);

}

// Checked Insert minden mezohoz megadni egy fuggvenyt es sql injection ellen es xss ellen is vedve hozzaadni az adatbazishoz

function checked_insert($pdo)
{
    $name = htmlspecialchars("qwe");
    $companyName = htmlspecialchars("qwe bt");
    $phone = htmlspecialchars("06123123123");
    $email = htmlspecialchars("qwe@placeholder.com");
    $photo = null;
    $note = htmlspecialchars("asdqqweewqrtz");

    $sql = "INSERT INTO cards(`name`, `companyName`,`phone`,`email`,`photo`,`note`)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $companyName, $phone, $email, $photo, $note]);
}

?>