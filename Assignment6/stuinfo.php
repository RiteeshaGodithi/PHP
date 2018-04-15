<?
$db=@mysqli_connect('localhost','root','','student_info')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
echo "<a href='student.html' />Home</a>";
// select a database 
// create a query
$q = "SELECT * FROM student";
// Execute the Query
$result = @mysqli_query($db, $q) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
 if(isset($result)){
	$row=@mysqli_fetch_array($result);
	echo'<table border="1" align="center"/><tr><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Image</th></tr>';
	do{
		echo'<tr><td>'.$row['id'].'</td><td>'.$row['fname'].'</td><td>'.$row['lname'].
		'</td><td>'.$row['email'].'</td><td><img src="'.$row['image'].'" alt=""/></td></tr>';
	}while($row=@mysqli_fetch_array($result));
  echo'</table>';	
 }else
	 echo' you do not have any records';
 
mysqli_close($db);

?>
