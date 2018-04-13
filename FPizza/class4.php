<?php


?>
<html>
<head><title>Home</title>

<script src="JavaScript.js"></script>

</head>
<body>
<table><tr><td>
<img src="logo.jpg" alt="logo" /></td><td align="center">
<h1 align="middle" /> Joe's Pizza </h1>
</tr></table>
<hr>
<b>Order Pizza</b><br />
<form action="order.php" method="post" id="order_form" />
<table>
<tr><td> Count :</td><td><input type="text" name="count" value="1" /></td></tr>

<tr><td>Size :</td><td><select name="size"> 
                       <option value="Large" />Large - 12.99</option>
					   <option value="Medium" />Medium - 8.99</option>
					   <option value="Small" />Small - 5.99</option></select></td></tr>
					   
<tr><td>Type :</td><td><input type="radio" name="type" value="Regular" /> Regular <br />
                       <input type="radio" name="type" value="Veggie" /> Veggie - Extra 1.99<br />
					   <input type="radio" name="type" value="Meats" /> Meats - Extra 2.99<br /></td></tr>
					   
<tr><td>Toppings :</td><td>	<input type="checkbox" name="topping_list[]" value="Extra Cheese" /> Extra Cheese <br />
							<input type="checkbox" name="topping_list[]" value="Broccoli" /> Broccoli  - Extra 0.99<br />
							<input type="checkbox" name="topping_list[]" value="Spinach" /> Spinach  - Extra 0.99<br />
							<input type="checkbox" name="topping_list[]" value="Bacon" /> Bacon  - Extra 1.99<br /></td></tr>
						   
<tr><td><td><input type="submit" value= "Order" /></td></td></tr>

</table>
</form>

To see your orders please click <a href="my_orders.php" />here</a><br />

<form action="search_orders.php" method="post">
<p><b>Search order by: </b><p>
<table>
		<tr><td>Size / Type / Toppings </td>
		<td style="padding: 15px;"><input id= "size" type="text" name="SearchOrder" value="" style="width:350" placeholder="Enter the string with with you want to search orders"/></td></tr>
		<tr><td><br /> </td></tr>
		<tr><td>Cost:</td>
		<td><input type="radio" name="costCriteria" value="radio1" /> Less than $ 20<input type="radio" name="costCriteria" value="radio2" />$20 to $100<input type="radio" name="costCriteria" value="radio3" /> Greater than 100</td></tr>
		<tr><td><br /> </td></tr>
		<tr><td><input id= "SearchOrder" type="submit" value="search orders" /> </td></tr>
</table>					
</form>
</body>
</html>