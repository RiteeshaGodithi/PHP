<?php
$maker = $_POST['maker'];
$model=$_POST['model'];
$price_n = $_POST['price'];
$mpg=$_POST['mpg'];
$miles= $_POST['miles'];
$type=$_POST['type'];


// connect to the database	}
$db=@mysqli_connect('localhost','root','')Or die("<p>The database server is not available.</p>");
// select a database 
@mysqli_select_db($db, "cars") Or die("<p>The database is not available.</p>");
// create a query
$SQLstring = "INSERT INTO inventory(make,model,price,mpg,mileage,type) VALUES('$maker', '$model', '$price_n', '$mpg', '$miles','$type')";
// Execute the Query
$QueryResult = @mysqli_query($db, $SQLstring) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
echo "<p>" . mysqli_info($db) . "</p>";
echo 'Your New Car details have succefully added.';
echo 'Search your cars '?><html><a href="searchcar.html" />here</a></html><?
// Close the database connection
mysqli_close($db);





?>