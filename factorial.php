<?php
function factorial($number) {
 if ($number < 0) {
 return "Invalid input: Negative numbers do not have a factorial.";
 }
 
 if ($number === 0 || $number === 1) {
 return 1;
 }
 
 $result = 1;
 for ($i = 2; $i <= $number; $i++) {
 $result *= $i;
 }
 
 return $result;
}

echo factorial(5); 
?>