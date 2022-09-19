<?php
    //посчитать длинну массива
    $arr=[1,2,3,7,31,1,8,6];
    echo("длинна массива = " . count($arr));
    echo "<br>";

    //переместить первые четыре элемента в конец массива
    for($i = 0; $i < 4; $i++) {
        array_push($arr, $arr[0]);
        array_shift($arr);
    }

    for($i = 0; $i < count($arr); $i++) {
        echo($arr[$i] . ' ');
    }
    echo "<br>";

    //получить сумму 4 5 6
    $sum = 0;
    for($i = 3; $i < 6; $i++) {
        $sum = $sum + $arr[$i];
    }
    echo "Сумма элементов = " . $sum;
    echo "<br>";

    //Найти все элементы которые отсутствуют 
    //в первом массиве и присутствуют во втором
    $firstArr = [
        'one'=>1,
        'two'=>2,
        'three'=>3,
        'foure'=>5,
        'five'=>12,
    ];
    
    $secondArr = [
        'one'=>1,
        'seven'=>22,
        'three'=>32,
        'foure'=>5,
        'five'=>13,
        'six'=>37,
    ];
    $result = array_diff($secondArr, $firstArr);
    print_r($result);
    echo "<br>";

    //найти все элементы которые присутствуют в
    //первом и отсутсвтуют во втором
    $result = array_diff($firstArr, $secondArr);
    print_r($result);
    echo "<br>";

    //найти все элементы значения которых совпадают
    $thirdArr = [];
    for ($i = 0; $i < 6; $i++) {
        $thirdArr = array_intersect($firstArr, $secondArr);
    }    
    for($i = 0; $i < 3; $i++) {
        echo ($thirdArr[$i]);
    }
    echo "<br>";

    //найти все элементы значения которых отличаются
    $thirdArr = [];
    for ($i = 0; $i < 6; $i++) {
        $thirdArr = array_diff($firstArr, $secondArr);
    }
    for($i = 0; $i < 3; $i++) {
        echo ($thirdArr[$i]);
    }
    echo "<br>";

    //получить все вторые элементы вложенных массивов
    $firstArr = [
        'one'=> 1,
        'two'=> [
            'one'=> 1,
            'seven'=> 22,
            'three'=> 32
        ],
        'three'=> [
            'one'=> 1,
            'two'=> 2
        ],
        'foure'=> 5,
        'five'=> [
            'three'=> 32,
            'foure'=> 5,
            'five'=> 12,
        ],
    
    ];
    $secondArr = [];
    for ($i = 0; $i < 4; $i++) {
        echo $firstArr[$i][1];
    }

    //вычислить сумму значений массива
    function arrRecursiveSum(array $arr)
    {
        $result = 0;
        foreach ($arr as $value) {
            if (is_array($value)) {
                $result += arrRecursiveSum($value);
            } else {
                $result += $value;
            }           
        }
        return $result;
    }

    echo array_sum($result);
    echo "<br>";

    //получить общее количество элементов в массиве
    $result = 0;
    foreach($firstArr as $value) {
        if (is_array($value)) {
            $result += $result + count($value);
            echo count($value);
        } else {
            $result++;
        }
        
    }
    //echo "Общее количество элементов в массиве = " . $result;
?>

