<?php
$count=$_POST['count'];
$size=$_POST['size'];
$type=$_POST['type'];
//$toppings=$_POST['topping_list']
if($size == 'Large'){
	$sizecost = 12.99;
}
else if($size == 'Medium'){
	$sizecost = 8.99;
}
else if($size = 'Small'){
	$sizecost = 5.99;
}
if($type == 'Veggi'){
	$typecost = 1.99;
}
else if($type == 'Meats'){
	$typecost = 2.99;
}
/*if($toppings == 'Cheese'){
	$topcost = 0.99;
}*/
$totalcost = $sizecost + $typecost ;
@$fd=fopen("orders.txt",'a');
if(isset($fd)){
	$pizza_order=" you ordered ".$count." pizza and size ".$size." type of pizza is ".$type." with total cost: ".$totalcost."\n";
	$pizza_toppings="Toppings are \n";
	fwrite($fd,$pizza_order);
	fwrite($fd,$pizza_toppings);
	
	foreach($_POST['topping_list'] as $item){
		$t= $item ."\n";
		fwrite($fd,$t);
	}
	fclose($fd);
	echo "you have ordered a pizza< click <a href='index.php' />here</a> to goback to main page";
}else
	echo 'file order.txt is not created ';

?>