<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$servername = getenv('hostName');
		$username = getenv('userName');
		$password = getenv('password');
		// if (!$servername || !$username || |$password)
		// {
		// 	echo "Failed to load Environment";
		// 	return;
		// }
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		// Create database
		$sql = "CREATE DATABASE myDB";
		if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
		} else {
		echo "Error creating database: " . $conn->error;
		}

		$conn->close();
	?>
</body>
</html>