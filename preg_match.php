<?php
$s = 'this is15-Feb-2009';
$matches = array();
if (preg_match('/((\d{2})-([a-z]{3})-(\d{4}))/i', $s, $matches)) {
    $input = DateTime::createFromFormat('d-M-Y', $matches[1]);
    if ($input === false) {
        echo sprintf("%s", "Invalid format");
    } else {
        print_r($input->format('Y-m-d'));    
    }
}
echo "\n\r";
print_r($matches);