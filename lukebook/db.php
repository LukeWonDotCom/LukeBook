<?php

function db_connect() {
	$servername = "localhost";
	$username = "(your_db_user)";
	$password = "(your_db_password)";
	$dbname = "(your_db_name)";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
    
		return $conn;
	
	}
	
	
	function user_conn() {
		
		
		
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$login = $_SESSION["user"];
	$sql = "SELECT type, uid FROM user_table WHERE login = '$login'";
	$result = mysqli_query($conn, $sql);
		// 'bla' . $result;
	
		
		$row = mysqli_fetch_assoc($result);
		//echo 'TESTING' . $row["type"];
		mysqli_close($conn);
	return $row;
	
	}
	
	function removep() {
		echo '<span onclick="this.parentElement.style.display=\'none\'" class="w3-closebtn">&times;</span>';
	}
	
	function displaymsg() {
		if (isset($_GET['msg'])) {
			echo '<br><div class="w3-container w3-panel w3-green w3-hover-teal w3-animate-zoom"><span onclick="this.parentElement.style.display=\'none\'" class="w3-closebtn">&times;</span><p>' . $_GET['msg'] . '</p></div>';
		}
	}
	
	$self = $_SERVER['PHP_SELF'];
	$SELF = $_SERVER['PHP_SELF'];
	
	
	
	
	?>