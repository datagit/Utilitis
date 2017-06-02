<?php
$linksArray = array_merge(array(null,null,1,2,5), array(null,null,'a','b','c','d'));
$a = array_values(array_filter($linksArray, function($value) { return $value !== null; }));
//print_r($a);
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
echo "\n";
$config = array(
    'id' => array('required' => true, 'type' => FILTER_VALIDATE_INT),
    'email' => array('required' => true, 'type' => FILTER_VALIDATE_EMAIL),
    'isRoot' => array('required' => true, 'type' => FILTER_VALIDATE_BOOLEAN),
    'userName' => array('required' => true, 'type' => FILTER_VALIDATE_REGEXP),
);
$input = array(
    'id' => 100,
    'email' => 'test@test.com',
    'isRoot' => true,
    'userName' => 'root-user-name',
);
function filterRequired($var){
    if ($var['required'] == true){
        return $var;
    }
}
$required = array_filter($config, 'filterRequired');
var_dump($required);

function filterOption($var){
    if ($var['required'] == false){
        return $var;
    }
}
$option = array_filter($config, 'filterOption');
var_dump($option);
die;
print_r(array_diff_key($config, $input));
if ($config['id']['required']) {

    if ((empty($input['id'])) || (!filter_var($input['id'], $config['id']['type']))) {
        echo "id invalid.\n";
    } else {
        echo "id is valid.\n";
    }
}