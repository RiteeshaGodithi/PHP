<?
//student grades
$std = array('std1'=>90, 'std2'=>80, 'std3'=>70, 'std4'=>60);
foreach($std as $s=>$g){
	echo ''.$s.'-'.$g.'<br/>';
}
echo 'while loop<br/>';
$std = array('std1'=>90, 'std2'=>80, 'std3'=>70, 'std4'=>60);
while($s=each($std)){
	echo ''.$s['key'].'--'.$s['value'].'<br/>';
}
//echo $std['std1'];
?>