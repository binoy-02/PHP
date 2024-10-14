<?php
function largestArraynum($arr){
    $max = $arr[0];
    foreach ($arr as $number) {
        if($number > $max){
            $max = $number;
        }
}
return $max;
}



$arr1=[2,34,5,78,6,4,6,223,5];
$largenum= largestArraynum($arr1);
echo $largenum;
?>