<?php
$fd=fopen("orders.txt", "r");
if(isset($fd)){
while(!feof($fd)){
	$o=fgets($fd,999);
	echo $o."<br />";
}
fclose($fd);
}else
	echo "unable to open orders.txt";
?>
