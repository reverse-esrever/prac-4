<?php

// Программа нахождения элемента массива

$arr = [1, 5, -1, 6, 9, 1];
$needle = 6;
function findElem($arr, $needle)
{
    foreach($arr as $elem){
        if($elem === $needle){
            return true;
        }
    }
    
    return false;
}
//Показывает тип перемнной(bool) и значение True или Fflse
var_dump($findElem($arr, $needle));
