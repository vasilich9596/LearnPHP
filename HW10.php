<?php
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