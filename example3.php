<?php 

//Простой калькулятор

//Сумма
function sum($a, $b){
    return $a + $b;
}
//Вычитание
function sub($a, $b){
    return $a - $b;
}
//Деление
function div($a, $b){
    return $a / $b;
}
//Умножение
function mul($a, $b){
    return $a * $b;
}

$a = 10;
$b = 5;
echo sum($a, $b) . PHP_EOL; // 15
echo sub($a, $b) . PHP_EOL; // 5
echo div($a, $b) . PHP_EOL; // 2
echo mul($a, $b) . PHP_EOL; // 50