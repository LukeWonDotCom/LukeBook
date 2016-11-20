<?php
session_start();
include ('session.php');
include ('db.php');

?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<?php include('logo.html'); ?>
	<title>LukeBook -Add Page</title>
	</head>
	<body>
	<? include('checkhead.php');?>
	<br><l1 class="hehe">Adding Page</l1>
	<form method="POST" action="lukebookadd.php"><br><br>
	Name: <input type="text" name="name"><br><br>
	Email: <input type="text" name="email"><br><br>
	Phone: <input type="text" name="phone"><br><br>
	Relationship: <select name="rel">
	<option value="2">Reletive</option>
	<option value="1" selected>Friend</option>
	<option value="0">Family</option>
	</select><br><br>
	<input type="submit" value="Add">
	</form>
	
	<?php
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if  ( (isset($_POST['name'])) AND (isset($_POST['email'])) AND (isset($_POST['phone'])) AND (isset($_POST['rel'])) ) {
	$suid = $_SESSION["suid"];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$rel = $_POST['rel'];
	
	$sql = "INSERT INTO profile (uid, pro_name, pro_email, pro_phone, pro_rel_id)
	VALUES ('$suid', '$name', '$email', '$phone', $rel)";

	if (mysqli_query($conn, $sql)) {
		echo "New User Added!<br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	mysqli_close($conn);
?>

	
	<?php include('footer.php');?>
	
	
	



	</body>
</html>