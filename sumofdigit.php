<?php
function sumofdigit($number){
    $sum=0;
    while($number!=0)    {
        $sum += $number % 10;
        $number = $number/10;
    }
    return $sum;
}

$number=2344;
echo sumofdigit($number);
?>