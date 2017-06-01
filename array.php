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
echo "\n";
$template = array(
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

print_r(array_diff_key($template, $input));
if ($template['id']['required']) {

    if ((empty($input['id'])) || (!filter_var($input['id'], $template['id']['type']))) {
        echo "id invalid.\n";
    } else {
        echo "id is valid.\n";
    }
}