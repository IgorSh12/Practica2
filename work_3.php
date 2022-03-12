<?php
    function test($n){
        return fact($n);
    }

    function fact($n){
        $res = 1;
        for ($i =1; $i<=$n;$i++){
            $res = $res * $i;
        }
        return $res;
    }

    echo test(10);