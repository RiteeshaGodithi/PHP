<?php
$count=$_POST['count'];
$size=$_POST['size'];
$type=$_POST['type'];
$toppings=$_POST['topping_list'];
@$fd=fopen("order.txt",'a');
if(isset($fd)){
$pizza_order= "You ordered " .$count. " pizza and size is " .$size." and type of pizza is ".$type."\n";
$pizza_toppings= "Selected Toppings are: \n";
fwrite($fd,$pizza_order);
fwrite($fd,$pizza_toppings);
$topPrice=0;
$sizPrice=0;
$typePrice=0;
foreach($_POST['topping_list'] as $item){
	$t= $item."\n";
	switch($item){
		case "Extra Cheese"	: 	$topPrice += 0;		fwrite($fd,$t); break;
		case "Broccoli"		: 	$topPrice += 0.99;	fwrite($fd,$t);	break;
		case "Spinach"		: 	$topPrice += 0.99;	fwrite($fd,$t);	break;
		case "Bacon"		: 	$topPrice += 1.99; 	fwrite($fd,$t);	break;
		}
	 }
	
	switch($size){
		case 'Large'	: 	$sizePrice = 12.99;	break;
		case 'Medium'	: 	$sizePrice = 8.99;	break;
		case 'Small'	: 	$sizePrice = 5.99;	break;
	}

	switch($type){
		case "Regular"	: 	$typePrice = 0;	break;
		case "Veggie" 	: 	$typePrice = 1.99;	break;
		case "Meats"  	: 	$typePrice = 2.99;	break;
	}

$price = $count*($topPrice + $sizePrice + $typePrice);
$pizza_cost= "Your total cost for order is $ " .$price. "\n";
fwrite($fd,$pizza_cost);
	fclose($fd);
	
	echo "Your order is successful...!!! <br/>";
	echo($pizza_order)."<br />";
	echo($pizza_toppings)."<br />";
	foreach($_POST['topping_list'] as $item){
	echo($item)."<br/>";}
	echo ($pizza_cost). "</b>\n";
	echo "<click> <a href='class4.php' /> click here</a> to go back to main page <br />";
	

}else
echo 'Your order is not ready';

?>