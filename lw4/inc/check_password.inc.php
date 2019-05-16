<?php

function countPasswordStrengthAllSymbol($passwordLength)
{
    return 4 * $passwordLength;
}

function countPasswordStrengthNumber($arrPassword)
{
    $countNumber = 0;
    foreach ($arrPassword as $value) {
        if (is_numeric($value)) {
            ++$countNumber;
        }
    }
    return 4 * $countNumber;
}

function countPasswordStrengthUpperCase($arrPassword, $passwordLength)
{
    $countUpper = 0;
    foreach ($arrPassword as $value) {
        if (ctype_upper($value) && ctype_alpha($value)) {
            ++$countUpper;
        }
    }

    if ($countUpper != 0) {
        return 2 * ($passwordLength - $countUpper);
    } else {
        return 0;
    }
}

function countPasswordStrengthLowerCase($arrPassword, $passwordLength)
{
    $countLower = 0;
    foreach ($arrPassword as $value) {
        if (ctype_lower($value) && ctype_alpha($value)) {
            ++$countLower;
        }
    }

    if ($countLower != 0) {
        return 2 * ($passwordLength - $countLower);
    } else {
        return 0;
    }
}

function countPasswordStrengthAllLetter($arrPassword, $passwordLength)
{
    $countLetter = 0;
    foreach ($arrPassword as $value) {
        if (ctype_alpha($value)) {
            ++$countLetter;
        }
    }

    if ($countLetter == $passwordLength) {
        return -($passwordLength);
    } else {
        return 0;
    }
}

function countPasswordStrengthAllNumber($arrPassword, $passwordLength)
{
    $countNumber = 0;
    foreach ($arrPassword as $value) {
        if (is_numeric($value)) {
            ++$countNumber;
        }
    }

    if ($countNumber == $passwordLength) {
        return -($passwordLength);
    } else {
        return 0;
    }
}

function countPasswordStrengthRepetition($arrPassword)
{
    $countRepetition = 0;
    $arrRepeat = array_count_values($arrPassword);
    foreach ($arrRepeat as $value) {
        if ($value > 1) {
            $countRepetition += $value;
        }
    }

    return -($countRepetition);
}

function passwordStrength($password)
{
    $passwordStrength = 0;
    $passwordLength = mb_strlen($password);
    $arrPassword = str_split($password);

    if (ctype_alnum($password)) {
        $passwordStrength += countPasswordStrengthAllSymbol($passwordLength);
        $passwordStrength += countPasswordStrengthNumber($arrPassword);
        $passwordStrength += countPasswordStrengthUpperCase($arrPassword, $passwordLength);
        $passwordStrength += countPasswordStrengthLowerCase($arrPassword, $passwordLength);
        $passwordStrength += countPasswordStrengthAllNumber($arrPassword, $passwordLength);
        $passwordStrength += countPasswordStrengthAllLetter($arrPassword, $passwordLength);
        $passwordStrength += countPasswordStrengthRepetition($arrPassword);
    }
    return $passwordStrength;
}