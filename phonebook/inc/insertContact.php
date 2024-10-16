<?php
		
		if(isset($_POST['insert'])) {
			
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['tel'])) {
			
			if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel'])) {

				if(ctype_alpha($_POST['fname']) && ctype_alpha($_POST['lname']) && is_numeric($_POST['tel'])){
					
					$fname = trim($_POST['fname']);
					$lname = trim($_POST['lname']);
					$tel = trim($_POST['tel']);	
					
					require('inc/connect.php');
					
					$fname = mysqli_real_escape_string($conn,$fname);
					$lname = mysqli_real_escape_string($conn,$lname);
					$tel = mysqli_real_escape_string($conn,$tel);
					
					$query = "INSERT INTO contacts(fname, lname, tel ) VALUES ('{$fname}','{$lname}','{$tel}')";
					
					if (mysqli_query($conn,$query) === TRUE){
						echo "New record succesfully created.";
					} else {
						echo "Error!";
					}					
				}
				else{
					echo "First name and last name can only contain letters. <br> Phone number can only contain numbers without spaces.";
				}
				
				

				
			} else {
				
				echo "All fields must be filled in.";
				
			}
			
		}	else {
			
			echo "All parameters must be sent.";
			
		}
			
		}
		
		?>