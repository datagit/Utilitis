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

//------------
echo "\n\r";
$number = 10.5;
$email = 'dat@gmail.com';
$pass = '@123Strong';
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL));
var_dump(filter_var('12.12', FILTER_VALIDATE_FLOAT));

$uppercase = preg_match('/[A-Z]+/', $pass, $matches1);
$lowercase = preg_match('/[a-z]+/', $pass, $matches2);
$number = preg_match('/[0-9]+/', $pass, $matches3);

if(!$uppercase || !$lowercase || !$number || (strlen($pass) < 8 || strlen($pass) > 20)) {
  echo "Not Strong password\n";    
} else {
    echo "Strong password\n";    
}


$s = 'producturl.php?id=736375493&t=tm';
$matches = array();
preg_match('/id=(\d+)&/i', $s, $matches);
print_r($matches);
echo "\n";

preg_match('/\bweb\b/i', 'PHP is the website scripting web language of choice.', $matches);
print_r($matches);
echo "\n";
