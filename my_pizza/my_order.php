<?
$fd = fopen("order.txt","r");
if(isset($fd)){
	while(!feof($fd)){	//file end of file
		$o = fgets($fd, 999);
		echo $o."<br/>";
	}
	fclose($fd);
}
else{
	echo 'unable to open file';
}
?>