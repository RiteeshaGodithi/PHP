<?php
// this is a script to order a pizza and search orders by their size, type and toppings  June 06, 2016
?>
<html>
<head><title>home</title></head>
<body>
<table  align="center">
	<col width="50%">
		<tr><td col width="50%">
<img src="logo.jpg" alt="logo" /></td>
<td align="center"><h1 align="middle" col width="30%" /> Joe's Pizza </h1></td>

<form action="order.php" method="post" id="order_form" />
<table align="center">
<tr align="center"><td><b>Ordering Pizza</b></td></tr>
<tr><td> How many Pizza :</td><td><input type="text" name="count" value="1" /></td></tr>
<tr><td>Size:</td><td><select name="size">
						<option value="Large" >Large- 12.99</option>
						<option value="Medium" >Medium - 8.99</option>
						<option value="Small"> Small - 5.99</option>
					</select>
					  </td></tr>
<tr><td>Type: </td><td><input type="radio" name="type" value="Regular" />Regular  <br />
                        <input type="radio" name="type" value="Veggi" />Veggi - Extra 1.99<br />
						<input type="radio" name="type" value="Meats" />Meats - Extra 2.99</td></tr>
						  

<tr><td>Toppings: </td><td><input type="checkbox" name="topping_list[]" value="Extra Cheese" /> Cheese <br />
						    <input type="checkbox" name="topping_list[]" value="Broccoli" /> Broccoli - Extra 0.99<br />
							<input type="checkbox" name="topping_list[]" value="Spinach" /> Spinach - 0.99<br />
							<input type="checkbox" name="topping_list[]" value="Bacon" /> Bacon - Extra 1.99		
							</td></tr>
<tr><td></td><td><input type="submit" value="Order" /></td></tr>
</table>
</form>


<form action="search_orders.php" method="post"  align="center">  
<table align="center">
<tr></tr>
<tr><td>Search order by: </td><td><select name="myselect[]">
						<optgroup label="Size">
							<option value="Large">Large</option>
							<option value="Medium">Medium</option>
							<option value="Small">Small</option>
						</optgroup>
						<optgroup label="Type">
							<option value="Regular">Regular</option>
							<option value="Veggie">Veggie</option>
							<option value="Meats">Meats</option>
						</optgroup>
						<optgroup label="Toppings">
							<option value="Cheese">Cheese</option>
							<option value="Broccoli">Broccoli</option>
							<option value="Spinach">Spinach</option>
							<option value="Bacon">Bacon</option>
						</optgroup>
						
						</select>
						
						</td>
						<tr><td>Price:</td>
		<td><input type="radio" name="cost" value="rad1" /> Less than $10<br/>
		<input type="radio" name="cost" value="rad2" />$10 to $50<br/>
		<input type="radio" name="cost" value="rad3" />$50 to $100<br/>
		<input type="radio" name="cost" value="rad4" />Greater than $100</td>
						</tr>
						<tr><td><input type="submit" value="Search Orders" /></td></tr></table>
</form>
 





</body>
</html>
