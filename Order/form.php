<!DOCTYPE html>
<html>
	<head>
		<title>Fight Club Order Form</title>
		
		<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	</head>
<style>
	body {
		background-image: url(/Pictures/FrontPage.jpg); 
	}
	
	h1 {
		font-family: 'Permanent Marker', cursive;
		background-color: #ededed;
		padding: 10%;
		margin-left: 20%;
		margin-right: 20%;
		margin-bottom: 0;
		margin-top: 2%;
		text-decoration: none;
		text-align: center;
		padding-top: 4%;
		font-size: 40px;
		padding-bottom: 2%;
	}
	
	h1 a {
		text-decoration: none;
		color: #454545;
	}
	
	form {
		background-color: #ededed;
		padding: 10%;
		text-align: center;
		margin-right: 20%;
		margin-left: 20%;
		margin-top: 0;
		padding-top: 0;
		padding-bottom: 4%;
		margin-bottom: 2%;
	}
	
	form input {
		background-color: #ededed;
		font-family: 'Staatliches', cursive;
		font-size: 30px;
		text-decoration: none;
		border: none;
		border-bottom: 2px solid #000;
		width: 50%;
	}
	
	form select {
		background-color: #ededed;
		font-family: 'Staatliches', cursive;
		font-size: 30px;
		text-decoration: none;
		border: none;
		border-bottom: 2px solid #000;
		width: 50%;
	}
	
	form input:focus {
		outline: none;
	}
	
	form select:focus {
		outline: none;
	}
	
	button {
		text-decoration: none;
		font-size: 30px;
		border-radius: 50px;
		background-color: #ededed;
		color: #828282;
		border: none;
		padding: 15px;
	}
	
	button:hover {
		background-color: #828282;
		color: #ededed;
		transition: 0.5s;
	}
	
	p {
		font-size: 1vw;
		color: red;
		font-family: 'Staatliches', cursive;
	}
	
</style>	
	<body>
		<h1><a href="/index.php">Fight Club</a></h1>
		<form action="orderform.php" method="post">
			<input type="text" name="full" placeholder="Full Name">
			<br>
			<br>
			<br>
			<select name="item"></a>
				
				<option value="1">Mens Bulletproof Shirt</option>
				<option value="2">Bulletproof Cup</option>
				<option value="3">Mens Shorts</option>
				<option value="4">Hanging Bag</option>
				<option value="5">Standing Bag</option>
				<option value="6">Bulletproof Gloves</option>
				<option value="7">Womens Bulletproof Shirt</option>
				<option value="8">Womens Shorts</option>
				<option value="9">Hair Clip</option>
				
			</select>
			<br>
			<br>
			<select name="color"></a>
				
				<option value="Red">Red</option>
				<option value="Blue">Blue</option>
				<option value="Green">Green</option>
				<option value="Yellow">Yellow</option>
				<option value="Purple">Purple</option>
				<option value="Orange">Orange</option>
				<option value="Pink">Pink</option>
				<option value="Black">Black</option>
				<option value="Grey">Grey</option>
				<option value="White">White</option>
				
			</select>
			<br>
			<br>
			<input type="text" name="quantity" placeholder="Quantity">
			<br>
			<br>
			<br>
			<input type="text" name="address" placeholder="Full Address">
			<br>
			<br>
			<input type="text" name="number" placeholder="Phone Number">
			<br>
			<br>
			<select name="shipping-type"></a>
				
				<option value="One Day">One Day</option>
				<option value="Two Day">Two Day</option>
				<option value="Standard">Standard (4-7 Business Days)</option>
				
			</select>
			<br>
			<br>
			<br>
			<input type="text" name="email" placeholder="Email">
			<br>
			<br>
			<br>
			<br>
			<button type="submit" name="submit">Submit Order</button>
			
			<?php
			
			if (isset($_GET['error'])) {
		        if ($_GET['error'] == "emptyfields") {
		        	echo '<p>You must fill in all fields!</p>';
		        }
    		}
		
			?>
			
		</form>
		
	</body>
</html>