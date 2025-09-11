<?php

require 'app/Traits/LoggerTrait.php';
require 'app/Traits/GreetingTrait.php';
require 'app/Services/MyService.php';

use App\Services\MyService;

$service = new MyService();
$service->run("valaki");
?>