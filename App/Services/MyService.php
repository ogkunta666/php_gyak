<?php
namespace App\Services;

use App\Traits\LoggerTrait;
use App\Traits\GreetingTrait;

class MyService {
    use LoggerTrait, GreetingTrait;

    public function run($name = "User") {
        $this->log("Service elindult");
        echo $this->greet("valaki");
    }
}

// Erre az egeszre csinalj egy feladat leirasat magyarul, hogy mit csinal a kod, milyen osztalyok, trait-ek vannak benne, es hogyan mukodik az index.php fajl.

// Feladat leírása:
// A fenti kód egy egyszerű PHP alkalmazást mutat be, amely két trait-et és egy szolgáltatási osztályt használ. A kód három fő részből áll: két trait (LoggerTrait és GreetingTrait) és egy szolgáltatási osztály (MyService), valamint egy index.php fájl, amely az alkalmazás belépési pontja.

?>


