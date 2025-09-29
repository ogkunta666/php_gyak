<?php
session_start();

if (isset($_SESSION['refresh'])) {
    $_SESSION['refresh']++;
} else {
    $_SESSION['refresh'] = 1;
}

echo "az oldal " . $_SESSION['refresh'] . " alkalommal lett betoltve";

?>