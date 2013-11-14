<?php

function sumNumber($str){
    $t= str_split($str);
    return array_sum($t);
}

function sumNumberExplained($str){
    $t= str_split($str);
    return implode(' + ', $t).' = '.array_sum($t);
}

function firstNumber($str){
    $t=ltrim($str,'0');
    return $t[0];
}