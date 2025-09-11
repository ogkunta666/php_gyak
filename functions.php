<?php
    echo "Szia";

    /*
      függvény definíció, paraméterek, visszatérési érték
    */

// Írj egy függvényt ami vissza adja két szám összegét
function sum(int $a, int $b): int {
    return $a + $b;
}
echo "<br>";
echo sum(5,3); // 8
echo "<br>";
echo sum("5","5") ; // 10
echo "<br>";


// Köszönő függvény

function sayHello($name = "Guest" ){
    return "Hello, $name!";
}

echo sayHello();
echo "<br>";
echo sayHello("Pista");
echo "<br>";
?>