<?php
header("Content-type: text/plane");
require_once 'inc/common.inc.php';

if (isset($_GET["text"]) && !empty($_GET["text"])) {
    echo removeExtraBlanks($_GET["text"]);
} else {
    echo "You have not entered a character string.";
}