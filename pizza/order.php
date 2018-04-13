<?php
$count=$_POST['count'];
$size=$_POST['size'];
$type=$_POST['type'];

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
$c=0;
foreach($_POST['topping_list'] as $item){
		$t= $item ."\n";
		if($t == 'broccoli')
			$c += 0.99;
		if($t == 'spinach')
			$c += 0.99;
		if($t == 'bacon');
			$c += 0.99;
	}
	
$totalcost = ($sizecost + $typecost + $c) * $count ;
@$fd=fopen("orders.txt",'a');
if(isset($fd)){
	$pizza_order="You ordered ".$count." pizza and size ".$size." type of pizza is ".$type."\n";
	$pizza_toppings="Toppings are: \n";
	
	fwrite($fd,$pizza_order);
	fwrite($fd,$pizza_toppings);
	
	
	foreach($_POST['topping_list'] as $item){
		$t= $item ."\n";
		fwrite($fd,$t);
	}
	$total_cost = "Total Cost $".$totalcost."\n";
	fwrite($fd,$total_cost);
	//fwrite($fd, "________________________________________________________________________________________________________");
	//fwrite($fd, "\n");
	
	fclose($fd);
	header("Location:my_orders.php");
    exit;
}else
	echo 'file order.txt is not created ';

?>