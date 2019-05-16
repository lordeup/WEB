<?php
require_once 'inc/common.inc.php';

if ($argc != 1) {

    $arr = getFilesDirectory($argv[1]);

    foreach ($filesList as $key => $value) {
        echo $filesList[$key] . " - " . countingFileLines($arr, $value) . " lines" . "\n";
    }

} else {
    echo "No parameters were specified!";
}