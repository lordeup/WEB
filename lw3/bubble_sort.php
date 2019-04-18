<?php
header("Content-type: text/plain");

function checkNumber($arr)
{
    for ($i = 0; $i < count($arr); ++$i) {
        if (!is_numeric($arr[$i])) {
            return false;
        }
    }
    return true;
}

function bubbleSort($arr)
{
    for ($i = 0; $i < count($arr); ++$i) {
        for ($j = 0; $j < count($arr) - 1; ++$j) {
            if ($arr[$j + 1] < $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

if (isset($_GET["numbers"]) && !empty($_GET["numbers"])) {
    $arr = explode(",", $_GET["numbers"]);

    if (checkNumber($arr)) {
        $arrSort = bubbleSort($arr);
        echo implode(', ', $arrSort);
    } else {
        header("Status: 400");
        echo "You entered a non-numeric value.";
    }

} else {
    header("Status: 400");
    echo "You have not entered numbers.";
}