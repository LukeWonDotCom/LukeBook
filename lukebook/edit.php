<?php
session_start();
include ('session.php');
include ('db.php');
admin();
?>
<html>
	<head>
	<title>LukeBook -Edit Page</title>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<?php include('logo.html'); ?>
	
	</head>
	<body>
	<?php include('header.php'); ?>
	<h2 class="hehe">Editing Page</h2>
	<?php
	
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$uid = $_GET['uid'];
	
	//$sql2 = "SELECT type, name, login FROM user_table WHERE uid = '$uid'";
	$sql2 = "select u.uid, u.name, u.login, t.type, t.description from user_table u, user_type t WHERE u.type = t.type AND uid = $uid";
	$result = mysqli_query($conn, $sql2);
	$row = mysqli_fetch_assoc($result);
	$type = $row["type"];
	$name = $row['name'];
	$login = $row["login"];
	
	//echo $uid;
	echo "<form action=\"edit.php?uid=$uid\" method=\"POST\">";
	
	$sql3 = "SELECT type, description FROM user_type";
	$result = mysqli_query($conn, $sql3);
	
		
	echo "Login: <input type=\"text\" value=\"$login\" name=\"login\"><br><br>";
	echo "Name: <input type=\"text\" value=\"$name\" name=\"name\"><br><br>";
	echo "Type: <select name=\"type\">";
		while ($row2 = mysqli_fetch_assoc($result)) {
			if ($type == $row2["type"]) {
				echo '<option value="' . $row2["type"] .'" selected>' . $row2["description"] . '</option>';
			} else {
				echo '<option value="' . $row2["type"] .'">' . $row2["description"] . '</option>';
			}
		}
		echo '</select><br><br>';
	echo "<input type=\"submit\" value=\"Update\"><br>";
	
	
	?>
	</form>
	
	
	
	<?php
	

	
	
	
	
	
	if  ( (isset($_POST['name'])) AND (isset($_POST['login'])) AND (isset($_POST['type']))	) {
	$plogin = $_POST['login'];
	$ptype = $_POST['type'];
	$pname =  str_ireplace("'", "''" , $_POST['name']);
	$pname = strip_tags($pname);
	$sql = "UPDATE user_table SET name='$pname', login='$plogin', type=$ptype WHERE uid='$uid'";
	//echo $sql . '<br>';
	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
	header("Refresh:0");
	}
	//echo <a href=;
	mysqli_close($conn);
	?>









	<?php include('footer.php');?>

	</body>
</html>