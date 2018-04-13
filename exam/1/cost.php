<?
 $db=@mysqli_connect('localhost','root','')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
// select a database 
@mysqli_select_db($db, "cars") Or die("<p>The database is not available.</p>");

if ((!empty($_POST["p1"])) && (!empty($_POST["p2"]))){
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];

    
	$SQLstring = "SELECT * FROM inventory where price BETWEEN ".$p1." and ".$p2."";
	
// Execute the Query
 }


$result = @mysqli_query($db, $SQLstring) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
 if(isset($result)){
	$row=@mysqli_fetch_array($result);
	echo'<table border="1"/><tr><th>ID</th><th>MAKER</th><th>MODEL</th><th>PRICE</th><th>MPG</th><th>MILEAGE</th><th>TYPE</th></tr>';
	do{
		echo'<tr><td>'.$row['ID'].'</td><td>'.$row['make'].'</td><td>'.$row['model'].
		'</td><td>'.$row['price'].'</td><td>'.$row['mpg'].'</td><td>'.$row['mileage'].'</td><td>'.$row['type'].'</td></tr>';
	}while($row=@mysqli_fetch_array($result));
  echo'</table>';	
 }else
	 echo' you do not have any car details';

echo '<br/> ';

 
 
mysqli_close($db);


?>