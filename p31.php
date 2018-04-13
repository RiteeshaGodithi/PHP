<?
DEFINE('pie',3.14);
DEFINE('k',10);
DEFINE('m',2);
echo "Today's date is: ".date("y/m/d"). "<br/>";
echo "Today's date is: ".date("F j,y,g:i a"). "<br/>";

//heredoc string syntax style
echo <<<TheEnd
hello
class
TheEnd
?>
<?
//type testing
$x=1;
echo 'x/"s type is '.gettype($x).'<br/>';
$x=(double)$x;
echo 'now x/"s type is '.gettype($x).'<br/>';
echo ''.k/m;

$i=0;
while($i++<5){
	echo'('.$i.') hello <br/>';
}
echo'('.$i.') bye bye <br/>';
?>