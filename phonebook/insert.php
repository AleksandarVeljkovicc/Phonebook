<html>

<head>
<meta charset="UTF-8">
<title> Phonebook </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
		<div id="search">

		<img src="img/addcontact.png">
		
			<a href="index.php"> <img src="img/phonebookimage.png" height="50px" title="Search"></a>
			<a href="remove.php"> <img src="img/removecontact.png" height="50px" title="Remove contact"> </a>
		
		<form action="#" method="POST">
		
			<label> First name: <br>
		<input type="text" name="fname"> </label><br>
			<label> Last name: <br>
		<input type="text" name="lname"> </label><br>
			<label> Tel: <br>
		<input type="text" name="tel"> </label><br>
		
		<input type="submit" name="insert" value="insert"> <br>
		
		
		</form>
		
		</div>
		
		<div id="message">
		<?php
		
		require("inc/insertContact.php");

		?>
		</div>
		
	</div>

	<script src="inc/submitFlush.js"></script>

</body>

</html>