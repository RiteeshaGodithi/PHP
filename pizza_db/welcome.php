
Welcome, <?php session_start();
echo $_SESSION['valid_user']; ?> to order a pizza click <a href="order.php" />here</a><br /><br />
<form id="search_form" action="search_order.php" method="post"/>
<select name="search_order" />
<option value="size">Size</option>
<option value="type">Type</option>
<option value="topping">toppings</option>
</select>
<input type="search" value="" name="search" /> <input type="submit" value="search" />
</form>
<?php
$db=@mysqli_connect('localhost','root','','pizza_info')Or die("<p>The database server is not available.</p>");
echo "<p>Successfully connected to the database server.</p>";
// select a database 
//@mysqli_select_db($db, "pizza_2016") Or die("<p>The database is not available.</p>");
//echo "<p>Successfully opened the database.</p>";
// create a query
$log = "";
$q = "SELECT * FROM orders";
// Execute the Query
$result = @mysqli_query($db, $q) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
 if(isset($result)){
	$row=@mysqli_fetch_array($result);
	echo'<table border="1"/><tr><th>ID</th><th>customer_ID</th><th>Size</th><th>Type</th><th>Toppings</th><th>Price</th><th>Del_Option</th></tr>';
	do{
		echo'<tr><td>'.$row['order_id'].'</td><td>'.$row['customer_id'].'</td><td>'.$row['size'].
		'</td><td>'.$row['type'].'</td><td>'.$row['toppings'].'</td><td>'.$row['price'].'</td><td>'.$row['delivery_option'].'</td></tr>';
	}while($row=@mysqli_fetch_array($result));
  echo'</table>';	
 }else
	 echo' you do not have any orders';
 
mysqli_close($db);

?>