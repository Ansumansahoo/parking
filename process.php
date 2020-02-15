<?php
$name = $email = $password = $comment = $gender = $adminid = $password1 =  "";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$comment = $_POST["comment"];
		$gender = $_POST["gender"];
		$adminid = $_POST["adminid"];
		$password1 = $_POST["password1"];
	
	
		$servername = "localhost";
		$username = "root";
		$dbpass = "";
		$dbname = "social";
	
		$conn = new mysqli($servername, $username, $dbpass, $dbname);
	
		if($conn->connect_error)
		{
			die("Connection failed:" .$conn->connect_error);
		}
		else
		{
			echo("Connected to Database");
		}
		$sql = "INSERT INTO register(name,email,password,comment,gender,adminid,password1) VALUES 
		('".$name."','".$email."','".$password."','".$comment."','".$gender ."','".$adminid ."','".$password1 ."')";
		if($conn->query($sql) == TRUE)
		{
			header("Location: index.php");

		}
		else
		{
			echo "Error:" .$sql."<br>".$conn->error;
		}
		$conn->close();
	}
	
?>
