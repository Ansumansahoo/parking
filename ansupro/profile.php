
<?php
session_start();
if(isset($_SESSION["loggedIn"])) {
	if(!empty($_SESSION["loggedInUserId"])) {
		$id = $_SESSION["loggedInUserId"];
		$servername = "localhost";
		$username = "root";
		$dbname = "social";
		
		//Create Connection
		$conn = new mysqli($servername, $username,null, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM register WHERE id = " .$id;
		$result = $conn->query($sql);
		$record = $result->fetch_assoc();
		$sql1 = "SELECT title, description, imagepost FROM posts INNER JOIN register ON posts.userid = register.id WHERE userid = ".$id;
		$postsResult = $conn->query($sql1);
		
	
	
}else {
	header("Location: login.php");
}
}
?>

	<html>
	<head>
		<title>
			UserProfile
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="left">
			<div class="cover">
				<img class="profile" src=<?php echo $record["image"]?> width="150" height="150">
			</div>
				
				<h1 class="name"><?php echo $record["uname"]; ?></h1><br>
				<h4 class="subtitle"><span style="color:darkblue;"><u>Name</u>: </span>&nbsp;<?php echo $record["fname"]; ?></h4>
				<h4 class="subtitle"><span style="color:darkblue"><u>Email</u>: </span>&nbsp;<?php echo $record["email"]; ?></h4>
				<h4 class="subtitle"><span style="color:darkblue"><u>Contact</u>: </span> &nbsp;<?php echo $record["phone"]; ?></h4>
				<br><br>
				
				<form action="logout.php">
				<input type="submit" value="LogOut">
				</form><br>
				<br>
				<form action="insertimage.php" method="post" enctype="multipart/form-data">
				<input type="file"  name="fileToUpload" /><br><br>
				<input type="submit" value="Upload" />
				</form>
				<br>
				<center><h6>Copyrights &copy; Reserved 2018.</h6></center>
				
			</div>
			<div class="right">
			<br>
				<form action="fetch.php" method="post" enctype="multipart/form-data">
				<input type="text" name="title"  placeholder="&nbsp; &nbsp;Title">
				<input type="text" name="description" placeholder="&nbsp;&nbsp;Description">
				
				<input type="submit" id="submit-button" value="POST">
				</form>
				<br>
				<hr>

				<?php
				while($row = $postsResult->fetch_assoc())
				{
					
				echo "<p><h2>".$row["title"]."</h2><p>";
				echo "<p><h4>".$row["description"]."</h4><p><hr>";
				}
				
				?>
			</div>
			
		 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
		<script src="js/script.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>