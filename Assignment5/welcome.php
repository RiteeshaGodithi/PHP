Hello.. 
<?php
session_start();
echo ucwords($_SESSION['name']); 
?>
<br/><br/>
<table align ="left">
<tr><td><a href ="index.html">Home</a></td></tr>
<tr><td><a href="order.php" />Order</a></td></tr>
<tr><td><a href="index.html" onclick="return logout();" />Logout</a>
</tr>
</table><br/><br/>
<!--<div>
Click here to see your orders <button type="button" onclick="myOrders();">My Orders</button><!--window.location.href = 'my_orders.php'
</div>-->
<form id="search_form" action="search_order.php" method="post"/>
<select name="search_order" />
<option value="size">Size</option>
<option value="type">Type</option>
<option value="topping">toppings</option>
</select>
<input type="search" value="" name="search" /> <input type="submit" value="search" />
</form>
<?php
$db=@mysqli_connect('localhost','root','','pizza_info')Or die('<p>The database server is not available.</p>');
//echo '<p>Successfully connected to the database server.</p>';
$q = 'SELECT * FROM orders where email = \'' . $_SESSION['email'] . '\'';
$result = @mysqli_query($db, $q) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
 if(isset($result)){
	$rowcount=mysqli_num_rows($result);
	if($rowcount>0){
	$row=@mysqli_fetch_array($result);
	echo 'Below are your oders';
	echo'<table border=1/><tr><th>ID</th><th>customer_ID</th><th>Size</th><th>Type</th><th>Toppings</th><th>Price</th><th>Del_Option</th><th>Email</th></tr>';
	do{
		echo'<tr><td>'.$row['order_ID'].'</td><td>'.$row['customer_ID'].'</td><td>'.$row['size'].
		'</td><td>'.$row['type'].'</td><td>'.$row['toppings'].'</td><td>'.$row['price'].'</td><td>'.$row['delivery_option'].'</td><td>'.$row['email'].'</td></tr>';
	}while($row=@mysqli_fetch_array($result));
	echo'</table>';}	
 else
	 echo 'you do not have any orders';
 
 mysqli_close($db);
 }
?>
<script>
function logout(){
alert('Successfully Logged out.');
window.location.href='index.html';}
</script>
