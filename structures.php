<?php


/*
1. if, else if, else
2. switch
3. Ciklusok : for, while, do while, foreach
4. Ternary operator
5. Tömbök (indexelt, asszociatív, többdimenziós)
*/
// egy szamrol dontsd el hogy az paros-e 

$number = 10;

if ($number % 2 == 0) {
    echo "$number egy páros szám";
} else {
    echo "$number egy páratlan szám";
}

$result = ($number % 2 == 0) ? "páros" : "páratlan";
echo "<br>$number egy $result szám<br>";


//Ciklussal irasd ki 1-10-ig a szamokat
for ($i = 0; $i < 10; $i++) {
    $out = $i + 1;
    echo $out . " ";
}

// Hozz létre egy indexelt tömböt 5 gyümölccsel, majd egy foreach ciklussal írasd ki a gyümölcsöket
$fruits = ["apple", "apricot", "banana", "grape", "strawberry"];
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . " ";
}

foreach ($fruits as $fruit) {
    echo $fruit . " ";
}

// Hozd létre a user tömböt ami tartalmazza a user nevét és életkorát 
$users = [
    "Nagy Tibi" => 30,
    "Kis Pisti" => 25,
    "Kovács János" => 40
];

foreach ($users as $name => $age) {
    echo "$name - $age éves<br>";
}

echo "<br>";

// vegyünk fel egy student tömböt ami tömbök tömbje legyen
$students = [
    [
        "name" => "Nagy Péter",
        "age" => 20
    ],
    [
        "name" => "Kis Pisti",
        "age" => 25 
    ],
    [
        "name" => "Kovács János",
        "age" => 40
    ]
];

echo "<br>";
foreach ($students as $student) {
    echo $student["name"] . " - " . $student["age"] . " éves<br>";
}

//Hf : userts tömb ami majd lehetőve teszi az authentikációt
?>