<?php
$num = 48;
if (!is_numeric($num)){
    echo "Enter a valid number";
} else {
    $num = (float)$num;
    switch (true) {
        case $num > 0:
            echo "The entered number $num is positive";
            break;
        case $num < 0:
            echo "The entered number $num is negative";
            break;
        default:
            echo "The entered number $num is zero";
    }
}
?>

