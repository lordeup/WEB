<?php

$vocabulary = [
    'Keyboard' => ['Клавиатура'] ,
    'Car' => ['Автомобиль', 'Машина'],
    'Hello' => ['Привет'],
    'Mouse' => ['Мышь', 'Мышка']
];

if (isset($_GET["word"]) && !empty($_GET["word"])) {
    $translateWord = $_GET["word"];
    $arr = [];

    if (!isset($vocabulary[$translateWord])) {
        header("Status: 404");
        echo "This word is not in the dictionary.";
    }

    foreach ($vocabulary as $key => $value) {
        if ($key == $translateWord) {
            for ($i = 0; $i < count($value); ++$i) {
                array_push($arr, $value[$i]);
            }
        }
    }
    echo implode(', ', $arr);

} else {
    header("Status: 400");
    echo "You did not enter a word to translate.";
}