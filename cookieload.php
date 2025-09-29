<?php
if (isset($_COOKIE["counter"])){
    $counter = $_COOKIE["counter"];
    $counter++;
   
    echo "Az oldal " . $counter . " alkalommal lett betöltve";
} else {
    $counter = 1;
    echo "Ez az oldal most lett először betöltve";
}

 setcookie("counter", $counter, time() + (86400 * 30), "/"); // 30 napig tarolja
?>