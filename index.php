<?php
//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах
$names =
[
  [
    'petro',
    'cristopher',
    'jhony',
  ],
  [
    'nannsy',
    'helga',
    'karen',
  ]
];

$nam = 6;
$element;

function elements($arr,$namber)
{
  foreach ($arr as $name ) 
  {
    if (is_array($name))
     {
      $element = $name[$namber];
      if(count($arr) >= $namber){
      print_r('елемент '.$namber.' '.$element);
    }
  }
  else{
      return false;
    }
    print('<br>');
  }
}

elements($names,$nam);

//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

$string = 'bobby whiliams go to the bad at 3 pm';
$word = 'b';
function rew($str , $word)
{
  if (is_string($str)) 
   {
      print_r('кількість b в '.$str." = ".substr_count($str, $word));
   }
 else
   {
    return false;
   }
}
rew($string ,$word);
print('<br>');

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины\

$numbers = 
[ 
  3,
  6,
  [7,7],
  [],
  6,
  5
];

function sumArr($array)
{
  $sum = array_sum($array);
  foreach ($array as $numbers) {
    if (is_array($numbers)) {
        $sum += sumArr($numbers);
    }  
  }
  return $sum;
}

print_r(sumArr($numbers));
print('<br>');

//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float.

$bigSquare = 8;
$smallSquare =5;
$SBig = 0;
$SSmall = 0;

function squareInSquare($big,$small)
{
    $SBig = $big * $big;
    $SSmall = $small * $small;
    $sum = $SBig / $SSmall; 
    return(floatval($sum));
}

print_r(squareInSquare($bigSquare,$smallSquare));

