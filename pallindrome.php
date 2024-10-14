<?php
function isPalindrome($string) {
 // Remove non-alphanumeric characters and convert to lowercase
 $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
 
 // Reverse the cleaned string
 $reversedString = strrev($cleanedString);
 
 // Check if the cleaned string is the same as the reversed string
 return $cleanedString == $reversedString;
}
// Example usage:
$string = "A man, a plan, a canal, Panama!";
if (isPalindrome($string)) {
 echo "\"$string\" is a palindrome.";
} else {
 echo "\"$string\" is not a palindrome.";
}
?>