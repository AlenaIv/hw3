<?php
$array = [];
for ($i = 0; $i < 20; $i++) {
    $array[$i] = rand(0, 100)-50;
}
var_dump($array);


echo '<br>';
echo negative($array);
echo '<br>';
echo product($array, 2,6);
echo '<br>';
echo prod_2($array, -7, 38);
echo '<br>';
echo prod_min($array);


function negative($a)
{
    $neg = 0;
    foreach ($a as $e) {
        if ($e < 0) {
            $neg++;
        }
    }
    return $neg;
}

function product($a, $b, $d){ /*функция, которая умножает элементы с номером от b до d */

    $prod = 1;

    if ($b > $d) {
        $tmp = $b;
        $b = $d;
        $d = $tmp;
    }

    for ($i = $b; $i < $d; $i++) {
        $prod *= $a[$i];
    }

    return $prod;
}
function prod_2 ($a, $b, $d){ /*умножает элементы со значением от b до d */
    $prod = 1;

    if ($b > $d) {
        $tmp = $b;
        $b = $d;
        $d = $tmp;
    }
    foreach($a as $e){

        if ($e>=$b && $e<=$d){

            $prod*=$e;
        }
    }
    return $prod;
}


function prod_min($a){ /*умножает элементы, стоящие перед минимумом */
    $prod = 1;
    $min = $a[0];
    $p = 0;
    for($i = 0; $i < count($a); $i++){
        if ($a[$i]<$min){
            $min = $a[$i];
            $p = $i;
        }
    }
    for ($i = 0; $i < $p; $i++){
        $prod *= $a[$i];
    }
    echo $min;
    echo '<br>';
    return $prod;
}