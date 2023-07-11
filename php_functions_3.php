<?php

function isDivisibleByThree($number) {
    if ($number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

$number1 = 6;
if (isDivisibleByThree($number1)) {
    echo $number1 . ' is divisible by 3.';
} else {
    echo $number1 . ' is not divisible by 3.';
}
