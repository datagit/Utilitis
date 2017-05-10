<?php
$linksArray = array_merge(array(null,null,1,2,5), array(null,null,'a','b','c','d'));
$a = array_values(array_filter($linksArray, function($value) { return $value !== null; }));
print_r($a);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => a
    [4] => b
    [5] => c
    [6] => d
)
*/