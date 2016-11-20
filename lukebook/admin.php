<?php
session_start();
include ('session.php');
admin();


?>

<html>
	<head>
	<script>

	</script>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<?php include('logo.html'); ?>
	<? include('adheader.php'); ?>
	<title>LukeBook -Admin Page</title>
	</head>
	<body>
	
	<?php /*include('db.php');
	$row = user_conn();
	if ($row["type"] == '0') {
		include('adheader.php');
		//echo 'yyy' . $row["type"];
	} else {
		include('header.php');
		//echo  'xxx' . $row["type"];
	}*/?><h2 class="hehe">Admin Page</h2> 
	
	
	
	<?php

	
	
	
	
	
	
include ('db.php');
// Create connection
$conn = db_connect();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['action'])) {
$action = $_POST['action'];
//echo $action;

//if (startsWith($action, 'Delete')) {
	//$uidno = substr($action, 7);
	
	
	//$post_uid = $POST['action'];
	//$sql = "DELETE FROM user_table WHERE uid= '$action'";
    //$result = mysqli_query($conn, $sql);
	
	//if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
	//} else {
    //echo "Error deleting record: " . mysqli_error($conn);
//}

//}





$sql = "DELETE FROM user_table WHERE uid= '$action'";
    $result = mysqli_query($conn, $sql);
	
	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully<br><br>";
	} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}

$sql = "SELECT uid, name, login FROM user_table ORDER BY name;";
$result = mysqli_query($conn, $sql);
//echo '<form method="POST" action="admin.php">';
echo '<form method="POST" action="admin.php">';
echo "<table>";
	echo "<tr>";
	echo "<th>No. </th><th>Name</th><th>Login</th><th>Action</th>";
	echo "</tr>";

	
	$n = 0;
	// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "pid: " . $row["pid"]. " - Name: " . $row["name"]. " - D.O.B: " . $row["dob"]. " - Gender: " . $row["gender"]."<br>";
		
		$uid = $row["uid"];
		$name = $row['name'];
		$login = $row["login"];
		$n = $n + 1;
		
	//echo '<script>';
	//echo 'function href() {';
    //echo "location.href = \"edit.php?uid=$uid\"";
	//echo '}';
	//echo '</script>';
		
		echo "<tr>";
			echo "<td>$n</td><td>$name</td><td>$login</td><td><button type=\"submit\" value=\"$uid\" name=\"action\">Delete</button><a href=\"edit.php?uid=$uid\"><input type=\"button\" value=\"Edit\"></a>";
			echo "</tr>";
	
	}
	echo "</table>";
	echo '</form>';
	?>
	<a onclick="goto('add.php')"><button>Add</button></a><br>
	<?php include('footer.php');?>
	</body>
</html>
