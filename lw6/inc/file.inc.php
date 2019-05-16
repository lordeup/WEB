<?php

$filesList = [
    "php",
    "twig",
    "js",
    "css"
];

function getFilesDirectory($directory)
{
    $arr = [];
    foreach (scandir($directory) as $value) {
        $path = realpath($directory.DIRECTORY_SEPARATOR.$value);
        if (!is_dir($path)) {
            $arr[] = $path;
        }
    }
    return $arr;
}

function countingFileSize($arr, $filesType)
{
    $size = 0;
    foreach ($arr as $value) {
        $fileName = explode('.', $value);
        $typeInfo = end($fileName);
        if ($filesType == $typeInfo) {
            $size += filesize($value);
        }
    }
    return $size;
}

function countingFileLines($arr, $filesType)
{
    $lines = 0;
    foreach ($arr as $value) {
        $fileName = explode('.', $value);
        $typeInfo = end($fileName);
        if ($filesType == $typeInfo) {
            $lines += count(file($value));
        }
    }
    return $lines;
}