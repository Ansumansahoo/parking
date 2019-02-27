<?php
			session_start();
			$email = $password = "";
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = $_POST["email"];
				$password = $_POST["pass"];
			
			// Initialize the parameters
				$servername = "localhost";
				$username = "root";
				$dbname = "social";
				
				//Create Connection
				$conn = new mysqli($servername, $username,null, $dbname);
				
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = "SELECT * FROM register WHERE email ='$email' AND pass = '$password '";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					//converting the result to associative array
					$record = $result->fetch_assoc();
					//setting session for login
					$_SESSION["loggedIn"] = true;
					//setting the session for user id
					$_SESSION["loggedInUserId"] = $record["id"];
					header("Location: profile.php");
				} else {
					$message = "Invalid Credentials";
					echo "<script type='text/javascript'>alert('$message');</script>";
					
				}
				
			}
		?>