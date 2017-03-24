<?php session_start();
include ('session.php');
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<title>LukeBook -Home Page</title>
	<!--Some Random Stuff Spot-->
	
	</head>

	<body>
	hi
	<?php include('header.php'); ?>
	<?php if (isset($_GET['msg'])) {
		echo '<p class="no">' . $_GET['msg'] . '</p>';
		
		
	}
	?>
	<?php echo "<h2>Welcome " . $_SESSION["user"] . "</h2>" ?>
	<?php
	
	
	
	include ('db.php');
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$login = $_SESSION["user"];
	$sql = "SELECT type FROM user_table WHERE login = '$login'";
	$result = mysqli_query($conn, $sql);

	
		$row = mysqli_fetch_assoc($result);
		//echo $row["type"] . "<br>";
	
		echo '<ul>';
	    if ($row["type"] == "0") {
		$_SESSION["admin"] = "yes";
		echo '<li><a href="admin.php" class="can">Admin Page</a></li>';
		} else {
		echo '<li><p class="no" title="You are not an admin!">Admin Page</p></li>';
		}
		
		echo '<li><p class="can">LukeBook</p></li>';
			
		echo '<li><a href="logout.php" title="Logout" class="can">Logout</a></li>';	
			
		echo '</ul>';
	
	
	
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	

	mysqli_close($conn);
	
	
	?>

	
	
	
	
	
	</body>



</html>