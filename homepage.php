<?php
$str = (file_get_contents("http://www.fdu.edu"));
$keyword = "FDU";
$array = explode(" ",$str);
for ($i=0; $i<count($array);$i++){
	if(strtoupper($array[$i])==$keyword){
		$array[$i] = "<b> <a href ='http://www.fdu.edu' target ='_blank'>FDU</a></b>";
	}
	echo $array[$i]." ";
}

?>