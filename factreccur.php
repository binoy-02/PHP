<?php
    function factorial($number){
        if($number <0){
            return "No factorial for negative numbers";
        }
        else if($number === 0 || $number === 1){
            return  1;
        }
        else{
            return $number * factorial($number-1);
        }
    }

    echo (factorial(5));
?>