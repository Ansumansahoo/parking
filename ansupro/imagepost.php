<?php
			session_start();
if(isset($_SESSION["loggedIn"])) {
			
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$id = $_SESSION["loggedInUserId"];
				//File related code
				$target_dir = "imagepost/";
				$target_file = $target_dir . basename($_FILES["imagePost"]["name"]);
				$uploadOk = 1;
				
				//get the image extension in small letters
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 0;
				}
				// Check file size
				if ($_FILES["imagePost"]["size"] > 500000) {
					echo "Sorry, your file is too large.";
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
					die;
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["imagePost"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["imagePost"]["name"]). " has been uploaded.";
					} else {
						echo "Sorry, there was an error uploading your file.";
						die;
					}
				}
			
			// Initialize the DB parameters
				$servername = "localhost";
				$username = "root";
				$dbname = "social";
				
				//Create Connection
				$conn = new mysqli($servername, $username, null, $dbname);
				
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				//Create query
				$sql = "INSERT INTO posts(userid, imagepost) VALUES('".$id."', '". $target_file."')";
				if($conn->query($sql) == TRUE)
				{
					$message = "Update succesfull";
					echo "<script type='text/javascript'>alert('$message');</script>";
					header("Location: profile.php");
				}
			
			else
			{
				echo "Error:" .$sql."<br>".$conn->error;
			}
			$conn->close();
			}
}
		?>