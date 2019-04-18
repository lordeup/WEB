<?php

function last($str)
{
    return mb_substr($str, - 1);
}

function withoutLast($str)
{
    return mb_substr($str, 0, -1);
}

function revers($str)
{
    $arr = preg_split('//u', $str);
    for ($i = 0, $j = (count($arr) - 1); $i < $j; ++$i, --$j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
    return implode($arr);
}

function checkIdentifier($str)
{
    for ($i = 0; $i < strlen($str); ++$i) {
        if (!ctype_alnum($str[$i]) || is_numeric($str[0])) {
            return false;
        }
    }
    return true;
}

function removeExtraBlanks($text)
{
    $arr = preg_split('//u', $text);
    $resultText = "";
    $countBlanksStart = 0;
    while (ctype_space($arr[$countBlanksStart])) {
        ++$countBlanksStart;
    }

    for ($i = $countBlanksStart; $i < count($arr); ++$i) {
        if (!ctype_space($arr[$i]) || (ctype_space($arr[$i]) && !ctype_space($arr[$i + 1]))) {
            $resultText = $resultText . $arr[$i];
        }
    }



    return $resultText;
}

function passwordStrength($password)
{
    $passwordLen = mb_strlen($password);
    $passwordStrength = 0;
    $countNumber = 0;
    $countLower = 0;
    $countUpper = 0;
    $arr = str_split($password);

    for ($i = 0; $i < $passwordLen; ++$i) {
        if (is_numeric($arr[$i])) {
            ++$countNumber;
        }

        if (ctype_lower($arr[$i]) && ctype_alpha($arr[$i])) {
            ++$countLower;
        }

        if (ctype_upper($arr[$i]) && ctype_alpha($arr[$i])) {
            ++$countUpper;
        }
    }

    $passwordStrength = $passwordStrength + 4 * $passwordLen;

    return $passwordStrength;
}