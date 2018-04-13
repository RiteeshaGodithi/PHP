<?

?>
<html>
<head><title>Home</title></head>
<body>
<form action="order.php" method="post">
<table>
<tr><td><img src="pizza.png" alt="logo"/></td>
<td><h1 align="center">Joe's Pizza</h1></td></tr>

</table>
<hr>
Ordring Pizza:<br/>

<table>
<tr><td>How many Pizzas:<td><input type="text" name="count" value="1"/></td></tr>
<tr><td>Size:</td><td><select name="size">
					<option value="Large">Large-12.99</option>
					<option value="Medium">Medium-8.99</option>
					<option value="Small">Small-5.99</option></select></td></tr>
<tr><td>Type:</td><td><input type="radio" name="type" value="Regular" />Regular<br/>
					  <input type="radio" name="type" value="Veggie" />Veggie</td></tr><br/>
<tr><td>Toppings:</td><td><input type="checkbox" name="toppings_list[]" value="Onions"/>Onions<br/>
						<input type="checkbox" name="toppings_list[]" value="Tomatoes"/>Tomatoes<br/>
						<input type="checkbox" name="toppings_list[]" value="Spinach"/>Spinach</td></tr><br/>
<tr><td><input type="submit" value="Submit"/></td></tr>
</table>
<a href="my_order.php"></a>
</form>
</body>
</html>
