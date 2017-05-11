<?php
function getAge() {
    $input = 'abc 1983-01-20 xxxxx';
    if (preg_match('/(\d{4})-(\d{2})-(\d{2})/i', $input, $matches)) {
        //1983-01-20
        $date = DateTime::createFromFormat('Y-m-d', $matches[0]);
        $now = new DateTime();
        if($now->format("Y") <= $date->format("Y")) {
            return 0;
        }
        return $now->format("Y") - $date->format("Y");
    }    
    return 0;
}
echo getAge();

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
