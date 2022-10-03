<?php
//остача при діленні 7/3
echo("*остача при діленні 7/3* <br>". 7 % 3 . '<br> <br>');

//повертає тільки ціле число
echo("*повертає тільки ціле число*<br>" . round(7 + 7.15) ."<br> <br>");

//шукає корінь 25
$corin = 25;
echo("*шукає корінь 25 *<br>". sqrt($corin). "<br> <br>");

/*действия со строками*/
$nigas = 'десять негритят пошли купаться в море';

//виводить 4 слово фрази
$wordsNigas = explode(" ", $nigas);
echo ("*вивести 4 слово фрази* <br>" . $wordsNigas[3] . '<br><br>');//3 тогошо str перевели в масиа

//виводить 17 букву
echo ("*виводить 17 букву речення* <br>" . mb_substr($nigas,16, 1 , 'UTF-8') . '<br> <br>');

//це тупо копіПаст не розібрався!!!
$nigas = mb_convert_case($nigas, MB_CASE_TITLE, "UTF-8");
echo("*перші букви в верхньому регістрі* <br>" . $nigas . "<br> <br>");

//длинна строки
echo("*виводить довжину строкі *<br>" . mb_strlen($nigas,'utf8') . "<br> <br>");

/*логические операции*/
//true = 1 , false = 0???
echo("?true = 1 , false = 0? <br>");
$t = true;
$f = false;
if($t == 1)
	echo("true = 1 <br>");
if ($f == 0) {
	echo ("false = 0 <br> <br>");
}

//какая строка длинее
$str1 = "three";
$str2 = 'три';
$strSum1 =  mb_strlen($str1);
$strSum2 =  mb_strlen($str2, 'utf8');
echo("?какая строка длинее? <br>" . "$str1 = $strSum1 <br> $str2 = $strSum2 <br> <br>");

//какое число больше?
echo("?какое число больше? <br>");
$num1 = 125 * 13 + 7;
$num2 = 223 + 28 * 2;
if ($num1 > $num2) {
	echo("first number bigger $num1");
} else {
	echo("second number bigger $num2");
}
echo('<br>');
echo($f);