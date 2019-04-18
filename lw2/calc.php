<?php
header("Content-type: text/html");

function checkParameter()
{
    if (count($_GET) != 3) {
        throw new Exception("You have entered an incorrect number of parameters, you need 3");
    }
    if (!isset($_GET['arg1']) || !isset($_GET['arg2']) || !isset($_GET['operation'])) {
        throw new Exception("You have entered incorrect parameter names, you must: arg1, arg2, operation");
    }
    if (!is_numeric($_GET['arg1']) || !is_numeric($_GET['arg2'])) {
        throw new Exception("You entered wrong arguments, you need to have numbers");
    }

    if ($_GET['operation'] == 'div' && $_GET['arg2'] == 0) {
        throw new Exception("It is impossible to divide by 0");
    }
}

function calc($arg1, $arg2, $operation)
{
    $result = 0;
    switch ($operation) {
        case 'add':
            $result = $arg1 + $arg2;
            break;
        case 'sub' :
            $result = $arg1 - $arg2;
            break;
        case 'mul':
            $result = $arg1 * $arg2;
            break;
        case 'div' :
            $result = $arg1 / $arg2;
            break;
    }
    return $result;
}

try {
    checkParameter();
    echo calc($_GET['arg1'], $_GET['arg2'], $_GET['operation']);
} catch(Exception $e) {
    echo $e->getMessage();
}