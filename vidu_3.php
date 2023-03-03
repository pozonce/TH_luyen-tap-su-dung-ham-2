<?php
function formatCurrency($num) {
    return number_format($num, 3, ',', ' ');
}
echo formatCurrency(1234567.89);
