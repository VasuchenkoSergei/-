<?php
/* Создать функцию принимающую массив произвольной вложенности и 
определяющий любой элемент номер которого передан параметром во всех
 вложенных массивах */
 $firstArr = [
    '0'=> 1,
    '1'=> [
        '1'=> 1,
        '2'=> 22,
        '3'=> 32
    ],
    '2'=> [
        '1'=> 1,
        '2'=> 2
    ],
    '3'=> 5,
    '4'=> [
        '1'=> 32,
        '2'=> 5,
        '3'=> 12,
    ],

];

function findEl($arr, $cnt) {
    if (is_array($arr)) {
        foreach ($arr as $value) {
            if ($value == $cnt) {
                return $cnt;
            }
        }
    } else {
        return false;
    }
}

foreach ($firstArr as $value) {
    echo findEl($firstArr, $value);
}


/* Создать функцию которая считает все буквы b в переданной строке, 
в случае если передается не строка функция должна возвращать false */
$text = "sdfg bghjk fbsd fb";

    function myf($txt, $sub) {
        if (is_string($txt)) {
            $result = substr_count($txt, $sub);
            return $result;
        } else {
            return false;
        }
    }

    echo myf($text, 'b');

// Создать функцию подсчета значений  массива произвольной глубины
$arr=[1,2,3,7,31,1,8,6, [1, [1, [1, [2]]]]];

    $result = 0;
    function sum($arr) {

        foreach ($arr as $value) {
            if (is_array($value)) {
                return $result += sum($value);
            } else {
                $result += $value;
                //return $result += $value;
            }
        }

        return $result;        
    }
    echo sum($arr);
    /* Создать функцию которая определит сколько квадратов меньшего 
    размера можно вписать в квадрат большего размера размер возвращать
     в float */
     $bigSquare = 100;
     $littleSquare = 1;
 
     function f ($big, $little) {
         echo $big / $little;
     }
 
     f($bigSquare, $littleSquare);