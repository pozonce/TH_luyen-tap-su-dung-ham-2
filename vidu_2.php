<?php
function countOccurrences($arr, $num) {
    $count = 0;
    foreach($arr as $item) {
        if($item == $num) {
            $count++;
        }
    }
    return $count;
}
$arr = [2, 4, 6, 8, 10, 2, 11, 24, 134, 22];
echo countOccurrences($arr, 14);
