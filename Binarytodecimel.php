<?php
    function binarytodecimel($bitstring){
        $len = strlen($bitstring);
        $decimal = 0;

        
        
       for($i=0;$i<$len;$i++){

        $bit= $bitstring[$len-$i-1];
        if($bit !='0' && $bit !='1'){
            return "Invalid binary number";
        }


        $decimal += intval($bit)  * pow(2,$i);
       }
       return $decimal;
    }

    $bitstring = "1101";
    $decimalvalue=binarytodecimel($bitstring);
    echo $decimalvalue;

?>