<html>

<head>
<meta charset="UTF-8">
<title> Phonebook </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
		<div id="search">

		<img src="img/deletecontact.png">
		
			<a href="index.php"> <img src="img/phonebookimage.png" height="50px" title="Search"></a>
			<a href="insert.php"> <img src="img/addcontact.png" height="50px" title="Add new contact"> </a>
		
		</div>
		
		<?php
		
			require("inc/contactList.php");
		
		?>
		
		
	</div>

</body>

</html>