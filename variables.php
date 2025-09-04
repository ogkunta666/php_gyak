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

// Konstansok
define("PI", 3.14);
echo "PI értéke: " . PI . "<br>";

// Adattípusok : string, integer, float, boolean, array, object, null

$message = "1";
echo "Kiír", $message . "értéket.", "<br>\n"; 
echo "Kiír $message értéket.", "<br>\n";


/*
 git parancsok:
    git init - új git helyi repository létrehozása
    git status - aktuális állapot megtekintése
    git add . - fájlok hozzáadása a staging area-hoz
    git commit -m "commit üzenet" - változtatások elkötelezése
    git log - commitok listázása
    git branch -m main - főág mainre nevezése
    git checkout ág_név - átváltás egy másik ágra
    git merge ág_név - ágak összeolvasztása
    git remote add origin távoli_repo_url - távoli repository hozzáadása
    git push origin ág_név - változtatások feltöltése a távoli repository-ba
    git pull origin ág_név - változtatások lehúzása a távoli repository-ból

    hf : toltsd le otthon a repot a sajat htdocs konyvtaradba
*/
?>