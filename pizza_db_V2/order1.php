<?php
$count=$_POST['count'];
$size=$_POST['size'];
$type=$_POST['type'];
$del=$_POST['del_opt'];
if($size=='large')
	$price=12.99;
elseif($size=='medium')
	$price= 8.99;
else
	$price=5.99;
 $t='';
	foreach($_POST['topping_list'] as $item){
		$t= $t.' '.$item .', ';
    }
// connect to the database	}
$db=@mysqli_connect('localhost','root','')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
// select a database 
@mysqli_select_db($db, "pizza_2016") Or die("<p>The database is not available.</p>");
echo "<p>Successfully opened the database.</p>";
// create a query
$SQLstring = "INSERT INTO orders VALUES('','', '$size', '$type','$t', '$price','$del')";
// Execute the Query
$QueryResult = @mysqli_query($db, $SQLstring) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
echo "<p>Successfully added the records.</p>";
echo "<p>" . mysqli_info($db) . "</p>";
// Close the database connection
mysqli_close($db);



?>
