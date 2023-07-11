<?php

function deleteRecurringElements($sortedList) {
    $result = array();

    $length = count($sortedList);

    for ($i = 0; $i < $length; $i++) {
        if ($i < $length - 1 && $sortedList[$i] === $sortedList[$i + 1]) {
            continue;
        }

        $result[] = $sortedList[$i];
    }

    return $result;
}

$sortedList = array("apple", "apple", "banana", "banana", "banana", "cherry", "date", "date");

$newList = deleteRecurringElements($sortedList);

foreach ($newList as $element) {
    echo $element . " ";
}
