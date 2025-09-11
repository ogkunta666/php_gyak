<?php

require 'app/Traits/LoggerTrait.php';
require 'app/Traits/GreetingTrait.php';
require 'app/Services/MyService.php';

use App\Services\MyService;

$service = new MyService();
echo "<br>";
$service->run("valaki");
echo "<br>";
?>