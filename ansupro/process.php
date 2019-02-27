<?php
$fname = $uname = $email = $phone = $pass = "";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$fname = $_POST["fname"];
		$uname = $_POST["uname"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$pass = $_POST["pass"];
	
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
		$sql = "INSERT INTO register(fname, uname, email, phone, pass) VALUES 
		('".$fname."','".$uname."','".$email."','".$phone."','".$pass."')";
		if($conn->query($sql) == TRUE)
		{
			header("Location: login.php");

		}
		else
		{
			echo "Error:" .$sql."<br>".$conn->error;
		}
		$conn->close();
	}
	
?>
