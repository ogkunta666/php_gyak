<?php

//Készíts egy függvényt ami át vesz egy string tömböt és visszaadja nagybetűsként az összes karaktert

function capitalizeAll(array $names): array {
   /* $tempArray = [];
   foreach ($names as $name) {
         $tempArray[] = strtoupper($name);
   }
   return $tempArray;*/
    return array_map('strtoupper', $names);
}

$names = ["Pista", "Tibi", "Geza"];

$capitalizedNames = capitalizeAll($names);

print_r($capitalizedNames);

?>