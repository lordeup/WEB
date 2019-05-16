<?php

function autoloader($directory)
{
    $arr = array_diff(scandir($directory), array('autoload.inc.php'));
    foreach ($arr as $fileName) {
        if (!is_dir($fileName)) {
            require_once($directory . $fileName);
        }
    }
}