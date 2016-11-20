<?php
session_start();
include ('db.php');

?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<?php include('logo.html'); ?>
	<title>LukeBook -Signup Page</title>
	</head>
	<body>
	<br><l1 class="hehe can">Adding Page</l1>
	<form method="POST" action="signup.php"><br><br>
	Username: <input type="text" name="login"><br><br>
	Password: <input type="password" name="pass"><br><br>
	Name: <input type="text" name="name"><br><br>
	
	<input type="submit" value="Add">
	</form>
	
	<?php
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if  ( (isset($_POST['login'])) AND (isset($_POST['pass'])) AND (isset($_POST['name'])) AND (isset($_POST['type'])) ) {
	
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$type = 1;
	
	$sql = "INSERT INTO user_table (login, password, name, type)
	VALUES ('$login', '$pass', '$name', $type)";

	if (mysqli_query($conn, $sql)) {
		echo "New User Added! <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<script>location.href='index.php?msg=login with the info you entered</script>'";
	}
	mysqli_close($conn);
?>

	
	
	
	
	


	<?php include('footer.php');?>
	</body>
</html>