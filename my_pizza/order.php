<?
$count = $_POST['count'];
$size = $_POST['size'];
$type = $_POST['type'];
@$fd = fopen("order.txt",'w');
if(isset($fd)){
$pizza_order = 'You ordered '.$count.' pizza with size '.$size.' and type '.$type;
$pizza_toppings = 'Toppings are';
fwrite($fd, $pizza_order);
fwrite($fd, $pizza_toppings);
foreach($_POST['toppings_list']as $item) {
	$t = $item."\n";
	fwrite($fd, $t);
}
}else{
	echo 'File not found';
}

?>