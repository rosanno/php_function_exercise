<?php

function convertDigitToWord($number) {
    $digitWords = array(
        'Zero', 'One', 'Two', 'Three', 'Four',
        'Five', 'Six', 'Seven', 'Eight', 'Nine'
    );

    $numberStr = strval($number);
    $word = '';

    for ($i = 0; $i < strlen($numberStr); $i++) {
        $digit = $numberStr[$i];

        if (is_numeric($digit)) {
            $word .= $digitWords[$digit] . ' ';
        }
    }

    return trim($word);
}

$number1 = 721;
echo $number1 . " = " . convertDigitToWord($number1);

echo "<br />";

$number2 = 12345;
echo $number2 . " = " . convertDigitToWord($number2);
