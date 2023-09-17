<?php
$time=18;

if($time>=18 && $time<=24){
    echo "Добрый вечер";
}
elseif($time>=1 && $time<=6){
    echo "Доброй ночи";
}
elseif($time>=8 && $time<=12){
    echo "Доброе утро";
}
else{
    echo "Добрый день";
}
?>