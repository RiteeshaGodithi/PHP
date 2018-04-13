<?php 
/* this is our php file to get data from p21  */
$uname=$_POST['u_name'];
$pword=$_POST['p_word'];
echo 'hello your user name is <b>'.$uname.' </b>and your password is<b> '.$pword.'</b> <br />';
echo 'hello your user name is <b>'.$_POST['u_name'].' </b>and your password is<b> '.$_POST['p_word'].'</b>';
echo '<br />(1)please click <a href="p23.php?u_name='.$uname.'&p_word='.$pword.'"/>here </a>';
// (1) and (2) are same, for (1) html is embed in to php fpor (2) php is embed intpo html 
?>
<br /><br />
(2) please click <a href="p23.php?u_name=<?php echo $uname;?>&p_word=<?php echo $pword;?>" />here</a> 
