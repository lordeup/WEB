<?php
require_once 'inc/common.inc.php';

if ($argc != 1) {

    $arr = getFilesDirectory($argv[1]);

    foreach ($filesList as $key => $value) {
        echo $filesList[$key] . " - " . round(countingFileSize($arr, $value) / 1024, 2) . " KB" . "\n";
    }

} else {
    echo "No parameters were specified!";
}