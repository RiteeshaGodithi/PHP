<?php
$fd=fopen("orders.txt", "r");
if(isset($fd)){
while(!feof($fd)){
	$o=fgets($fd,999);
	echo $o."<br />";
}
echo "you have ordered a pizza< click <a href='index.php' />here</a> to goback to main page";
fclose($fd);
}else
	echo "unable to open orders.txt";
?>
