<?php
include "dbcon.php";


?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Customer Design</title>
<link href="css/Customer_Homepage.css" rel="stylesheet" type="text/css">
</head>
<header>
	<h1>
		This is the Customer Design Page
	</h1>
</header>
	
<body>
	<style>
		table{
			background-color: tan;
			border:0px;
			padding: 0px;
			
		}
		tr{
			background-color: tan;
		}
		td{
			background-color: tan;

		}
		button {
			margin: 0 auto;
		}
		select, input {
	float: right;
}
	
	</style>
	<table class = "AlignTable">
		<tr>
		<td><img  src="images/white_tshirt_picture.jpeg" class = "MarginImage" alt = "tshirt" id = "WhiteTShirtPicture"></td>
		<td><img src="images/White_Sweatshirt_Picture.jpeg" class = "MarginImageSweatShirt" alt = "tshirt" id = "WhiteSweatShirt"></td>
		</tr>
		<tr>
			<td>
		<label for="color">Color:</label>
		<select class = "selectSpacing" name="color" id="color">
  		<option value="XS">White</option>
		<option value="XS">Grey</option>
		<option value="XS">Black</option>
			</select>
					</td>
			<td>
		<label for="SweatshirtColor">Color:</label>
		<select class = "selectSpacing" name="color" id="SweatShirtolor">
  		<option value="XS">White</option>
		<option value="XS">Grey</option>
		<option value="XS">Black</option>
		</select>
		
			</td>
		</tr>
		<tr>
			<td>
		<label for="size">Size:</label>
		<select class = "selectSpacing" name="size" id="size">
  		<option value="XS">XS</option>
		<option value="XS">S</option>
		<option value="XS">M</option>
		<option value="XS">L</option>
		<option value="XS">XL</option>
	</select>
			</td>
			<td>
			<label for="size">Size:</label>
		<select class = "selectSpacing" name="size" id="SweatshirtSize">
  		<option value="XS">XS</option>
		<option value="XS">S</option>
		<option value="XS">M</option>
		<option value="XS">L</option>
		<option value="XS">XL</option>
	</select>
			</td>
		</tr>
		<tr>
		<td>
			<label for="Quantity">Quantity:</label>
		<input class = "selectSpacing" type="number" id="quantity" name="quantity"
       min="0" max="250">
			</td>
			<td>
			<label for="Quantity">Quantity:</label>
		<input class = "selectSpacing" type="number" id="SweatshirtQuantity" name="quantity"
       min="0" max="250">
			</td>
		</tr>
		<tr>
			<td>Quantity Available:</td>
			<td>Quantity Available:</td>
		</tr>
	</table>
	

	<button class = "button" onClick="location.href='Customer_Homepage.html'">
	Back to Homepage
	</button>
	<button class = "button" onClick="location.href='Customer_Checkout.html'">
	Submit Order
	</button>
		
</body>
</html>
