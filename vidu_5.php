<?php
function countWords($str) {
    $words = explode(",", $str);
    return count($words);
}
echo countWords("cục cứt trôi,sông");
?>