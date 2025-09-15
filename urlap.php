<?php
//Egy önmagát feldolgozó űrlap egy darab név mezővel és mögötte van a submit gomb
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? 'Név nélkül');
    echo "Üdvözöllek, " . $name . "!";
} else {
    // Az űrlap megjelenítése
    ?>
    <h1>Űrlapkezelés</h1>
    <form method="post">
        <label for="name">Név:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Küldés">
    </form>
    <?php
}
?>