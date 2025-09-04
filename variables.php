<?php
/*
    Szukseges programok: XAMPP (apache, mysql), git, github repo, vscode
    <?php .. ?> - php kod kezdete es vege
    echo - kiiratas

    Valtozok:
        - $valtozoNev = ertek;  // ertek lehet szam, szoveg, logikai ertek (true/false)
        - valtozo nev csak betuvel kezdodhet, utana lehet szam is
        - valtozo nev nem tartalmazhat szokozokat es kulonleges karaktereket
        - valtozo nev nem lehet foglalt szo (pl. echo, if, else, while, for, function, return, class, public, private, protected, static, new, try, catch, throw, use, namespace stb.)
        
*/

$name = "John";
$age = 18;
$city = "New York";
var_dump($name);
echo "<br>";
echo "név: " . $name . "<br>";
echo "kor: " . $age . "<br>";
echo "város: " . $city . "<br>";
?>