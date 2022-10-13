<?php
/*
$array = [];
$integer = rand(1,400);
$NUM = 50;
$array = array_fill(1, $NUM, $integer);
var_dump($array);
$arrSum = array_sum($array);
echo"<br>";
echo"<br>";
print_r('сума всіх елементів масиву - '. $arrSum);
echo"<br>";
print_r('среднее арифметическое всех элементов массива   - '. $arrSum/$NUM );
*/

$size = 50;
$array = [];
for ($i = 1; $i <= 50; $i++){
    $array[$i] =rand(1,400);
}
$arrSum = array_sum($array);
var_dump($array);
echo"<br>";
print_r('сума всіх елементів масиву - '. $arrSum);
echo"<br>";
print_r('среднее арифметическое всех элементов массива   - '. $arrSum / count($array) );
echo"<br>";
print_r('мінімальний елемент массиву - ' . min($array) );
echo"<br>";
print_r('максимальний элемент массива - '. max($array) );
echo"<br>";
sort($array);
foreach ($array as $value){
    echo "сртуваня по зростанню.$value. <br>";
}
echo"<br>";
rsort($array);
foreach ($array as $value){
    echo "сортування по спаданню.$value. <br>";
}