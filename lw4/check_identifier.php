<?php
header("Content-type: text/plain");
require_once 'inc/common.inc.php';

if (isset($_GET["identifier"]) && !empty($_GET["identifier"])) {

    if (checkIdentifier($_GET["identifier"])) {
        echo "Yes";
    } else {
        echo "No. The first character can only be a letter. Other characters can be a number or a letter.";
    }

} else {
    echo "You have not entered a character string.";
}