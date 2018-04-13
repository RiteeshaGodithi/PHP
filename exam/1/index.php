<?php
session_start();
$username = $_POST['u_name'];
$passwd = $_POST['password'];
$passwd=sha1($passwd);	


$db=@mysqli_connect('localhost','root','')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
// select a database 
@mysqli_select_db($db, "cars") Or die("<p>The database is not available.</p>");
echo "<p>Successfully opened the database.</p>";
$password=sha1($passwd);
// create a query
$SQLstring = "SELECT * FROM admin where username = '".$username ."'";
// Execute the Query
	
$QueryResult = @mysqli_query($db, $SQLstring) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';

if(isset($QueryResult)){
	$row=@mysqli_fetch_array($QueryResult);
	$_SESSION['firstname'] = $row['firstname'];
$_SESSION['email'] = $row['email'];
	$_SESSION['username']=$row['username'];
	if(strtoupper($_SESSION['username'])==strtoupper($username) && $passwd == $row['password'])
	if($_SESSION['username']==$username && $passwd == $row['password'])
	{
		//echo $_SESSION['Name'].' is valid User with email '.$_SESSION['email'];
		 header('Location: cars.html');
	}
	else{
		echo "<script>
alert('Oops..!! Please enter valid user credentials');
window.location.href='login.html';
</script>";
	}
 }

?>


