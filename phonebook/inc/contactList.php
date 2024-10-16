<?php
		
		require('inc/connect.php');
		$query = "SELECT * FROM contacts";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
				?>
				
				<div id="result">
				
				<a href="inc/removeContact.php?id=<?php echo $row['id'] ?>"> <img src="img/removecontact.png"> </a>
				<p><b>Name: </b> <?php echo $row['fname'] . " " . $row['lname']; ?> </p>
				<p><b>Tel: </b> <?php echo $row['tel']; ?> </p>
				
				</div>
				
				<?php
			}
			
		} else {
			echo "No contacts!";
		}
		
		?>