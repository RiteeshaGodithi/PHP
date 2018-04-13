<?php

//file_put_contents('internet.txt', file_get_contents('http://www.fdu.edu/'));

/*$url = 'http://www.fdu.edu/';
$file = "internet.txt";
$src = fopen($url, 'r');
$dest = fopen($file, 'w');
echo stream_copy_to_stream($src, $dest) . " bytes copied.\n";*/

/*$homepage = file_get_contents('http://www.fdu.edu/');
echo $homepage;
$fd = fopen("internet.txt", 'w');
fwrite($fd, $homepage);
print_r(explode(' ',$homepage));
fclose($fd);*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.fdu.edu/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
$result = curl_exec($ch);
$fd = fopen("internet.txt", 'w');
fwrite($fd, $result);
fclose($fd);
curl_close($ch);
?>