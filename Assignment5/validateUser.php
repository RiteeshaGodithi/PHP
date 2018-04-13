<?php
session_start();
$username = $_POST['u_name'];
$passwd = $_POST['password'];
$passwd=sha1($passwd);	
$db=@mysqli_connect('localhost','root','','pizza_info')Or die("<p>The database server is not available.</p>");
$q = "SELECT * FROM customers where username = '".$username ."'";
// Execute the Query
$result = @mysqli_query($db, $q) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
  if(isset($result)){
	$row=@mysqli_fetch_array($result);
	$_SESSION['name'] = $row['fname']." ".$row['mname'].", ".$row['lname'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['username']=$row['username'];
	//if(strtoupper($_SESSION['username'])==strtoupper($username) && $passwd == $row['password'])
	if($_SESSION['username']==$username && $passwd == $row['password'])
	{
		//echo $_SESSION['Name'].' is valid User with email '.$_SESSION['email'];
		 header('Location: welcome.php');
	}
	else{
		echo "<script>
alert('Oops..!! Please enter valid user credentials');
window.location.href='index.html';
</script>";
	}
 }
?>


