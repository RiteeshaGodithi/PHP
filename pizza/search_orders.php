<?php
error_reporting(0);
@$fp=fopen("search_orders.txt",'a');
$fd=fopen("orders.txt",'r');
foreach($_POST['myselect'] as $item){
		$text= $item ."\n";
	}
	//echo 'ccc '.$item;
//$search = $_POST['SearchOrder'];
$radio  = $_POST['cost'];
if(isset($fd)){

	$file = file("orders.txt");
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
					case "rad1": 
									if($cost<10){
										$count++;
									} break;
					case "rad2": 
									if($cost>=10 && $cost<50){
										$count++;
									} break;
					case "rad3": 
									if($cost>=50 && $cost<100){
										$count++;
									} break;
					case "rad4": 
									if($cost>100){
										$count++;
									} break;
					
				}
			}	
			else{
				$matches = array_filter($temp, function($var) use ($item) { return preg_match("/\b$item\b/i", $var); });
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
?>
