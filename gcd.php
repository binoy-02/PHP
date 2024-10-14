<?php
    function gcd($n1,$n2){
        while($n2 != 0){
            $temp = $n2;
            $n2= $n1 %$n2;
            $n1 = $temp;
        }

        return $n1;
    }

   $gcdnum= gcd(56,98);
   echo $gcdnum;
?>