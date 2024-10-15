<?php
    function longestwordlength($string){
        $words=preg_split('/[\s]/',$string);
        $maxLength =0;
        $maxLengthWord=0;

        foreach($words as $word){
            $length =strlen($word);
            if($length>$maxlength){
                $maxLength = $length;
                $maxLengthWord= $word;

            }
        }
        
        
        return $maxLength;
    }
    $string = "The quick brown fox jumps over the lazy dog!";
    $maxWordLength = longestWordLength($string);
    echo "The length of the longest word in the string is : $maxWordLength ";
    
?>