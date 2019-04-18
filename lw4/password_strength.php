<?php
header("Content-type: text/plane");
require_once 'inc/common.inc.php';

if (isset($_GET["password"]) && !empty($_GET["password"])) {
    echo passwordStrength($_GET["password"]);
} else {
    echo "You have not entered a character string.";
}