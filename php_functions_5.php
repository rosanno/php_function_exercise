<?php

function isArmstrongNumber($number) {
    $sum = 0;
    $originalNumber = $number;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, 3);
        $number = (int)($number / 10);
    }

    if ($sum === $originalNumber) {
        return true;
    } else {
        return false;
    }
}

$number1 = 153;
if (isArmstrongNumber($number1)) {
    echo $number1 . ' is an Armstrong number. <br />';
} else {
    echo $number1 . ' is not an Armstrong number. <br />';
}

$number2 = 370;
if (isArmstrongNumber($number2)) {
    echo $number2 . ' is an Armstrong number. <br />';
} else {
    echo $number2 . ' is not an Armstrong number. <br />';
}
