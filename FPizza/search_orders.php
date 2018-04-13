<?php
error_reporting(0);
@$fp=fopen("search_orders.txt",'a');
$fd=fopen("order.txt",'r');
$search = $_POST['SearchOrder'];
$radio  = $_POST['costCriteria'];
if(isset($fd)){

	$file = file("order.txt");
	for ($i = 0; $i < count($file); $i++) {
		$count=0;
		$k=0; 
		do{
		$temp[$k] = $file[$i];
		$i++; $k++;
		}While(strpos($file[$i],'$')==false);
		$temp[$k] = $file[$i];
		
			if(isset($radio)){
				preg_match_all('!\d+!', $temp[$k], $matches);
				$cost = $matches[0][0];
				switch($radio){
					case "radio1": 
									if($cost<20){
										$count++;
									} break;
					case "radio2": 
									if($cost>=20 && $cost<=100){
										$count++;
									} break;
					case "radio3": 
									if($cost>100){
										$count++;
									} break;
					
				}
			}	
			else{
				$matches = array_filter($temp, function($var) use ($search) { return preg_match("/\b$search\b/i", $var); });
			if(count($matches)>0){
					$count++;
				}
			}
			if($count>0){
			for($j=0;$j<count($temp); $j++) { 
					echo $temp[$j] . "<br />";
					fwrite($fp,$temp[$j]); 
				}
			}
			
			for($j=0;$j<count($temp);$j++){
				array_pop($temp);
			}
		}
fclose($fd);
fclose($fp);

}else
	echo "unable to open search_orders.txt";
