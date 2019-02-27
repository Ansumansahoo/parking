<?php
	session_start();
	$title = $description ="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$title = $_POST["title"];
		$description = $_POST["description"];
		$id = $_SESSION["loggedInUserId"];
		
		
		$servername = "localhost";
		$username = "root";
		$dbpass = "";
		$dbname = "social";
	
		$conn = new mysqli($servername, $username, $dbpass, $dbname);
	
		if($conn->connect_error)
		{
			die("Connection failed:" .$conn->connect_error);
		}
				$sql = "INSERT INTO posts(userid, title, description, imagepost) VALUES 
				('".$id."','".$title."','".$description."','".$target_file."')";
				if($conn->query($sql) == TRUE)
				{
				
					header("Location: profile.php");
					
				}
			else
			{
				echo "Error:" .$sql."<br>".$conn->error;
			}
			$conn->close();
		
	}
?>
