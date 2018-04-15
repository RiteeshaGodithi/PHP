<?php
$term=$_POST['search'];
$s_type=$_POST['search_order'];
$db=@mysqli_connect('localhost','root','','pizza_info')Or die("<p>The database server is not available.</p>");
if(!get_magic_quotes_gpc()){
	$term=addslashes($term);
	$s_type=addslashes($s_type);
}
if($s_type=="size")
	$q = "SELECT * FROM orders WHERE size like'%". $term."%'";
elseif($s_type=="type")
	$q = "SELECT * FROM orders WHERE type like'%". $term."%'";
else
	$q = "SELECT * FROM orders WHERE toppings like'%". $term."%'";
// Execute the Query
$result = @mysqli_query($db, $q) Or die('<p>Unable to execute the query</p><p>Error code '. mysqli_errno($db).
 ': '. mysqli_error($db)) . '</p>';
 if(isset($result)){
	$row=@mysqli_fetch_array($result);
	echo'<table border="1"/><tr><th>ID</th><th>customer_ID</th><th>Size</th><th>Type</th><th>Toppings</th><th>Price</th><th>Del_Option</th></tr>';
	do{
		echo'<tr><td>'.$row['order_ID'].'</td><td>'.$row['customer_ID'].'</td><td>'.$row['size'].
		'</td><td>'.$row['type'].'</td><td>'.$row['toppings'].'</td><td>'.$row['price'].'</td><td>'.$row['delivery_option'].'</td><td>'.$row['email'].'</td></tr>';
	}while($row=@mysqli_fetch_array($result));
  echo'</table>';	
 }else
	 echo' you do not have any orders';
 
mysqli_close($db);

?>
