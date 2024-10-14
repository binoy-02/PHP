<?php
function isPrime($number){
    if($number <=1){
        return false;
    }
    else if($number <=3 ){
        return true;
    }
    if($number % 2 ==0 || $number % 3 ==0){
        return false;
    }
    for($i=5; $i*$i >= $number; $i+=6){
        if($number % $i ==0 || $number % (i+2) == 0){
            return false;
        }
    }
    return true;
}



    $number =6746;
    if(isPrime($number)){
        echo "Number is prime";
    }
    else{
        echo "Number is not prime";
    }
?>





