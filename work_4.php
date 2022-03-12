<?php

    function test($num){
        return prost($num);
    }

    function prost($num){
        for ($i=2;$i<$num;$i++){
            if ($num %$i == 0){
                return(0);
            }
        }
    }

    $a = test(13);
    if ($a == 0){
        echo "Это не протостое число";
    }else{
        echo  "Это число простое";
    }
