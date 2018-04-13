<?php

//create short variable names
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mname=$_POST['m'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  
  // start session which may be needed later
  // start it now because it must go before headers
  
	
	$db=@mysqli_connect('localhost','root','')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
// select a database 
@mysqli_select_db($db, "cars") Or die("<p>The database is not available.</p>");
echo "<p>Successfully opened the database.</p>";
$password=sha1($passwd);
// create a query
$SQLstring = "insert into admin(firstname,lastname,email,username,password)  values('$fname','$lname','$email', '$username','$password')";
// Execute the Query
$QueryResult = @mysqli_query($db, $SQLstring) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';

echo "<p>Successfully added the records.</p>";
header('Location: login.html');
echo "<p>" . mysqli_info($db) . "</p>";
// Close the database connection
mysqli_close($db);

?>
