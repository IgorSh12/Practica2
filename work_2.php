<?php

function test($I, $w){
    return  area($I, $w);
}

function area($I, $w){
    $area = $I * $w;
    return "Прямоугольник длиной " . $I . " и шириной " . $w . " имеет площадь - " . $area;
}

echo test(20, 10);