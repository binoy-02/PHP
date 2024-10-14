<?php
    
    function fibinacci($number){
        if($number == 1){
            echo "0";
        }
        if($number == 2){
            echo "01";
        }
       else{
        $n1=0;$n2=1;
        echo "01";
        for($i=2;$i<$number;$i++){
            $n3=$n1+$n2;
            $n1=$n2;
            $n2 =$n3;
            echo $n3 ," ";
        }

       }
        
    }

    fibinacci(10);
?>