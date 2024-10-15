<?php
function reversedString($string){
    $words = explode(' ',$string);
    $reversed_words= array_reverse($words);
    $reversed_string= implode(' ',$reversed_words);
    return $reversed_string;
}

$string= "Hello how are you";
$reverse=reversedString($string);

echo$string  ;
echo "\n";
echo$reverse;
?>