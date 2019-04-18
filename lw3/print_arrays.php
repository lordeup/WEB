<?php
header("Content-type: text/plain");

$primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];

echo "First 10 prime numbers:\n";
foreach($primeNumbers as $value) {
    echo $value . " ";
}
echo "\n";

$descriptionFunction = [
    'count' => 'Подсчитывает количество элементов массива или что-то в объекте',
    'is_array' => 'Определяет, является ли переменная массивом',
    'array_merge' => 'Сливает один или большее количество массивов',
    'empty' => 'Проверяет, пуста ли переменная',
    'print_r' => 'Выводит удобочитаемую информацию о переменной'
];

echo "\n";
echo "PHP functions and their description:\n";
foreach($descriptionFunction as $key => $value) {
    echo "$key => $value". "\n";
}
echo "\n";

$matrix = [
    [1, 0, 0, 0],
    [1, 1, 0, 0],
    [1, 0, 1, 0],
    [1, 0, 0, 1]
];

echo "Elements of the identity matrix:\n";
for ($i = 0; $i < count($matrix); ++$i) {
    for ($j = 0; $j < count($matrix); ++$j) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";
}