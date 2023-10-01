<?php
//сумма
function getSum($num1,$num2){
    $suma=$num1+$num2;
    return $suma;
}
echo getSum(5,5).'<br>';

//вычитание
function getMin($num3,$num4){
    $minus=$num3-$num4;
    return $minus;
}
echo getMin(10,5).'<br>';

//умножение
function getUmn($num5,$num6){
    $umn=$num5*$num6;
    return $umn;
}
echo getUmn(10,3).'<br>';

//деление
function getDel($num7,$num8){
    $del=$num7/$num8;
    return $del;
}
echo getDel(6,3).'<br>';

//2

function getPrin($num){
    $num9=$num+$num;
    $num9=$num9*2;
    $num9=$num9/4;
    return $num9;
}
echo getPrin(2).'<br>';

//3

function getPriv($imya){
    $time=13;
    if($time>=17 && $time<=21){
        echo "Добрый вечер $imya";
        }
        elseif($time>=22 && $time<=6){
        echo "Доброй ночи $imya";
        }
        else{
        echo "Добрый день $imya";
    }
}
echo getPriv('Никита');

?>