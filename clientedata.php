<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'>
		<title>Test PHP</title>
	</head>
	<body>
		<p>Nombre <?php echo $_POST['nombre'];?></p>
		<br>
		<p>The email address is: <?php echo $_POST['correo'];?></p>
		<p>Aspecto que le gustaron: <?php echo $_POST['mult'];?></p>
		<p>¿Como llego? : <?php echo $_POST['op']?></p>

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "destino1";
			$dbname = "moviesdb";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			//echo "Connected successfully";

			$name = $_POST['nombre'];
			$email = $_POST['correo'];
			$site = $_POST['mult'];

			$sql = "INSERT INTO clients (name, email, site) VALUES ('$name', '$email', '$site')";
		
			if ($conn->query($sql) === TRUE) {
			    echo " <br> New record created successfully";
			} else {
			    echo "<br> Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		?>
	</body>
</html>