<?php
header("Content-type: text/plain");

if (isset($_GET["string"]) && !empty($_GET["string"])) {

    $strLower = mb_strtolower($_GET["string"]);
    $arrStrSplit = preg_split('//u', $strLower, -1, PREG_SPLIT_NO_EMPTY);
    $arrSymbol = [];

    foreach ($arrStrSplit as $value) {
        if (array_key_exists($value, $arrSymbol)) {
            ++$arrSymbol[$value];
        } else {
            $arrSymbol[$value] = 1;
        }
    }

    foreach ($arrSymbol as $key => $value) {
        if (ctype_space($key)) {
            echo "' '(пробел)";
        } else {
            echo $key;
        }
        echo " - " . $value . "\n";
    }

} else {
    header("Status: 400");
    echo "You did not enter a string.";
}