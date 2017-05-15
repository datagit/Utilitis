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

function getDistributionProbability($countItem = 3, $one = array('percent' => 50, 'value' => 'A')
		, $tow = array('percent' => 30, 'value' => 'B')
		, $three = array('percent' => 20, 'value' => 'C')) {	
	$data = array();
	foreach(range(1, $one['percent']) as $n) {
		$data[] = $one['value'];
	}
	foreach(range(1, $tow['percent']) as $n) {
		$data[] = $tow['value'];
	}
	foreach(range(1, $three['percent']) as $n) {
		$data[] = $three['value'];
	}
	
	$keys = array_rand($data, $countItem);
	$res = array();
	foreach($keys as $k) {
		$res[] = $data[$k];
	}
	return $res;
}
print_r(getDistributionProbability());
