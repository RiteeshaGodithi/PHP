<?php
$start = 1; 
$end = 10; 
$pick = 4;

$numbers = array();

for($i = 0; $i < $pick; $i++ ) {
	$random = mt_rand($start, $end);
	
	if( isset($numbers[$random]) )
		
		$i--;
	
	else
		
		$numbers[$random] = false;
}

$numbers = array_keys($numbers);

print_r($numbers);

function subsets($S,$L) {
    $a = $b = 0;
    $subset = [];
    $result = [];
    while ($a < count($S)) {
        $current = $S[$a++];
        $subset[] = $current;
        if (count($subset) == $L) {
            $result[] = json_encode($subset);
            array_pop($subset);
        }
        if ($a == count($S)) {
            $a = ++$b;
            $subset = [];
        }
    }
    return $result;
}

$S = $numbers;
$L = 2;
print_r($S);

for ($i = 2; $i <= count($S); $i++)
    print_r(subsets($S,$i)); 

?>