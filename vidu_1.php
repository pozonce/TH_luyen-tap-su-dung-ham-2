<?php
function findSecondMax($arr) {
    $max = $arr[0];
    $secondMax = $arr[1];
    foreach($arr as $num) {
        if($num > $max) {
            $secondMax = $max;
            $max = $num;
        }
        else if($num > $secondMax && $num != $max) {
            $secondMax = $num;
        }
    }
    return $secondMax;
}
$arr = [4, 2, 3, 1];
echo findSecondMax($arr);
