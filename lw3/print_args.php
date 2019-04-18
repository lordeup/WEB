<?php

if ($argc != 1) {
    $numberOfArguments = $argc - 1;
    echo "Number of arguments: {$numberOfArguments}" . "\n" . "Arguments: ";
    for ($i = 1; $i < $argc; ++$i) {
        echo ($i != $argc - 1) ? $argv[$i] . ' ' : $argv[$i];
    }
} else {
    echo "No parameters were specified!";
}