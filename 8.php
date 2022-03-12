<?php
    function Pal($string) {
        if ($string == strrev($string))
            return "Да";
        else
            return "Нет";
    }
    echo Pal('pool')."<br>";
    echo Pal('lepsspel');
