<?php
/* Osztály 
    - osztály : sablon (tervrajz)
    - Objektum : osztály alapján létrehozott példány
    - Konstruktor/destruktor : 
    - Tulajdonságok (public, private, protected)
    - Öröklődés (extends) 
    - Trait (függvények amiket különböző osztályból szeretnék elérni)

*/

// Készíts car osztályt, márka, típus, szín tulajdonságokkal, konstruktor is legyen

class Car {
    public  $brand;
    public $type;
    private $color;

    public function __construct( $brand,  $type,  $color) {
        $this->brand = $brand;
        $this->type = $type;
        $this->color = $color;
    }

    public function info () {
        echo "$this->brand, $this->type, $this->color<br>";
    }


}

$car = new Car("Opel", "Astra", "red");
$car->info();

//Hozd létre a MathHelper osztályt amiben legyen egy statikus változó PI értékkel és egy statikus metódus square néven

class MathHelper {
    public static $PI = 3.14;

    public static function square($number) {
        return $number * $number;
    }
}

echo MathHelper::$PI . "<br>";


//Készíts egy ElectricCar osztályt ami a Car osztályból öröklődik és legyen egy akkumulátor kapacitás tulajdonsága is

class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($brand, $type, $color, $batteryCapacity) {
        parent::__construct($brand, $type, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function info() {
        parent::info();
        echo "Akkumulátor kapacitás: $this->batteryCapacity kWh<br>";
    }
}

$eCar = new ElectricCar("Tesla", "Model 3", "white", 75);
$eCar->info();


// Hozz létre egy trait-et ami tartalmaz egy metódust ami kiírja "Szia [név]"

trait GreetTrait {
    public function greet($name) {
        echo "Szia, $name!<br>";
    }
}



?>