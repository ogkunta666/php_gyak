<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? 'Név nélkül');
    $password = htmlspecialchars($_POST['password'] ?? 'Nincs megadva');
    echo "Üdvözöllek, " . $name . "! A jelszavad: " . $password;
} else {
    
    ?>
    <h1>Űrlapkezelés</h1>
    <form action="" method="post">
        <label for="name">Név:</label>
        <input type="text" id="name" name="name">
        <label for="password">Jelszó:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Küldés">
    </form>
    <?php
}
?>