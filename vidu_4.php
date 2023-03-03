<?php
function isSubstring($str, $sub) {
    return strpos($str, $sub) !== false;
}
echo isSubstring("Hello world!", "world");
echo isSubstring("Hello world!", "foo");
