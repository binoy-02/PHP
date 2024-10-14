<?php
    function sortarray($arr){
        for($i=0;$i<sizeof($arr);$i++){
            for($j=$i+1;$j<sizeof($arr);$j++){
              
                if($arr[$j]< $arr[$i]){
                    $temp = $arr[$j];
                    $arr[$j]=$arr[$i];
                    $arr[$i]=$temp;
                }
        }
        
}
return $arr;
}
    

    $arr = [3,7,4,2,9,1];
    
    $sorted_array = sortarray($arr);
    print_r($sorted_array);
    echo implode(",",$sorted_array);
?>