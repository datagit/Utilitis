<?php
//Enter your code here, enjoy!

function distributionProbability() {
    $total = 100.0;
    $aValue1 = 0.0;
    $aValue2 = $aValue1 + round(50/100, 3);
    
    $bValue1 = $aValue2;
    $bValue2 = $bValue1 + round(30/100, 3);
    
    $cValue1 = $bValue2;
    $cValue2 = $total - $bValue2;
    
    $s = sprintf("A %f, B %f , C %f",$aValue2,$bValue2, $cValue2);
    //echo $s;
    //echo "\n";
    $randNumber = round((float)rand()/(float)getrandmax(), 3);
    if ($randNumber >= $aValue1 && $randNumber <= $aValue2) {
        echo "A\n";
    }
    if ($randNumber >= $bValue1 && $randNumber <= $bValue2) {
        echo "B\n";
    }
    if ($randNumber >= $cValue1 && $randNumber <= $cValue2) {
        echo "C\n";
    }
    echo $randNumber . "\n";
}
for($i =0;$i<=3;$i++){
    distributionProbability();
}

function probability(){
    $v = 'A=50,B=20,C30';
    $data = array();
    for($i = 0; $i < 50; $i++) {
        $data[] = 'A';
    }
    for($i = 0; $i < 20; $i++) {
        $data[] = 'B';
    }
    for($i = 0; $i < 30; $i++) {
        $data[] = 'C';
    }    
    $keys = array_rand($data, 3);
    echo $v;
    echo "\r\n";
    foreach($keys as $value) {
        Print_r($data[$value]);
        echo "\r\n";
    }
    
}
probability();
