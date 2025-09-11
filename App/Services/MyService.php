<?php
// Ez a file futtatja le a Greetinget és a Loggert 

require_once 'Traits\GreetingTrait.php';
require_once 'Traits\LoggerTrait.php';

$greeting = new GreetingTrait();
$logger = new LoggerTrait();

$greeting->sayHello("Tibi");
$logger->log("Üdvözöllek Tibi!");

?>