<?php
header("Content-type: text/plain");

if (isset($_GET["arr"]) && !empty($_GET["arr"])) {
    $arr = explode(",", $_GET["arr"]);
    for ($i = 0, $j = (count($arr) - 1); $i < $j; ++$i, --$j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }

    print_r($arr);
} else {
    header("Status: 400");
    echo "You did not enter array elements.";
}