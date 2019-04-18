<?php

if ($argc == 2) {
    $arr = preg_split("//u", $argv[1]);
    $arrNoDuplicate = array_unique($arr);
    echo implode($arrNoDuplicate);
} else {
    echo "Incorrect number of arguments!\n" . "Usage php remove_duplicates.php <input string>\n";
}