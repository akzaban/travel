<?php

//require("database.php");
	if(isset($_POST['submit']))
				{
			## connect mysql server
			$mysqli = new mysqli("127.0.0.1:3306", "root", "anjalisri", "travel");
			# check connection
			if ($mysqli->connect_errno)
			{
			echo '<script>alert("MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}");</script>';
			exit();
			}

			 {
				$username = $_POST['usern']; 
				$password = $_POST['Password']; 
				$sql = "SELECT * from user WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
				$result = $mysqli->query($sql);

				if ($result->num_rows == 1)
					{
						$_SESSION['username'] = $_POST['username'];
						echo '<script>
						alert("You have successfully logged in as user!");
						window.location.href = "packages.html";
						</script>'; 	
					}


			else
					{
						echo '	<script>
							alert("Invalid Username/Password!");
							window.location="index.html";
							</script>';
						exit();
					}

				}		}
		

	?>
