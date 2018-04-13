
<html>
<head><title>home</title></head>
<body>
<table  ><tr><td>
<img src="logo.jpg" alt="logo" /></td><td align="center">
<h1 align="middle"  /> Joe's Pizza </h1></td>
</tr></table>
<hr>
<b>Ordering Pizza</b><br />
<form action="order1.php" method="post" id="order_form" />
<table>
<tr><td> How many Pizza :</td><td><input type="text" name="count" value="1" /></td></tr>
<tr><td>Size:</td><td><select name="size">
						<option value="large" >Large- 12.99</option>
						<option value="medium" >Medium - 8.99</option>
						<option value="small"> Small - 5.99</option>
					</select>
					  </td></tr>
<tr><td>Type: </td><td><input type="radio" name="type" value="Regular" /> Regular <br />
                        <input type="radio" name="type" value="Veggi" />Veggi<br />
						<input type="radio" name="type" value="meats" />Meats</td></tr>
						  

<tr><td>Toppings: </td><td><input type="checkbox" name="topping_list[]" value="Broccoli" /> Broccoli<br />
							<input type="checkbox" name="topping_list[]" value="Spinach" /> Spinach <br />
							<input type="checkbox" name="topping_list[]" value="Extra Cheese" /> Extra Cheese <br />
							<input type="checkbox" name="topping_list[]" value="Bacon" /> Bacon		
							</td></tr>
<tr><td> Delivery Option :</td><td><select  name="del_opt">
									<option value="home_del"> Home Devlivery </option>
									<option value="pick_up"> Pick up</option>
									</select>
<tr><td></td><td><input type="submit" value="Order" /></td></tr>
</table>
</form>
To see all your orders please click <a href="my_orders.php" /> here </a><br />

<form action="search_orders.php" method="post">  
Search order by: </td><td><select name="size">
						<option value="sizle" >size</option>
						<option value="type" >type</option>
						<option value="toppings">toppings</option>
					</select><input type="text" name="search_order" value=" "/> <input type="submit" value="search orders" />
</form>
 





</body>
</html>
		