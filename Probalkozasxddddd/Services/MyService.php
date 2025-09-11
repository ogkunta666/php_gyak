<?php
ban

require_once 'Traits\GreetingTrait.php';
require_once 'Traits\LoggerTrait.php';




$greeting = new GreetingTrait();
$logger = new LoggerTrait();

public function run() {
        $this->sayHello("Tibi");
        $this->log("Üdvözöllek Tibi!");
    }




$service = new MyService();
$service->run();

?>