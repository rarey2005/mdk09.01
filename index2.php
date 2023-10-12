<?php

//1. Объеденить элементы массива в строку

$a=[1,2,3,4,5,6];
$b= join($a);
echo $b.'<br>';

//2. Замена символов с отсутствием регистрозависимости

$str='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.';

echo str_ireplace('a','+',$str).'<br>';

//1. функция explode() разбивает строку

$slova='1slovo 2slovo 3slovo';
$slova1=explode(' ',$slova);
echo $slova1[0].'<br>';
echo $slova1[2].'<br>';

//2. функция str_split() преобразует строку в массив

$hello='Hello world';

$arr1=str_split($hello);

echo('<pre>');
print_r($arr1).'<br>';
echo('<pre>');

//3. strlen возвращает длину строки

echo strlen($hello).'<br>';

//4.Возвращает строку, начиная с найденного символа

echo strpbrk($hello,'e').'<br>';

//5. print выводит строку

print "привет".'<br>';

//6. wordwrap() переносит строку по  указанному количеству символов

$a1=wordwrap($hello,4,'<br>');
echo $a1;

//7.

//8.

//9.

//10.
?>