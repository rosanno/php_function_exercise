<?php

function isVowel($character)
{
    $vowels = array('a', 'e', 'i', 'o', 'u');

    $character = strtolower($character);

    if (in_array($character, $vowels)) {
        return true;
    } else {
        return false;
    }
}

$char1 = 'a';
if (isVowel($char1)) {
    echo $char1 . ' is a vowel.';
} else {
    echo $char1 . ' is a consonant.';
}

$char2 = 'b';
if (isVowel($char2)) {
    echo $char2 . ' is a vowel.';
} else {
    echo $char2 . ' is a consonant.';
}
