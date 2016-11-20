<?php
session_start();
include('session.php');
include('db.php');
?>
<html>
<head>
<title>LukeBook -The BOOK</title>
<link rel="stylesheet" type="text/css" href="oml.css">
<?php include('logo.html'); ?>
</head>
<body>
<form method="POST" action="lukebook.php">
<?php //include('header.php'); ?>
<? include('checkhead.php');?>
<br><l1 class="hehe">LukeBook</l1>

<?php //echo "<h2>Welcome " . $_SESSION["user"] . "</h2>" ?>
<?php
//error_reporting(-1);
//include('db.php');
//echo 'BLA';

	/*$row = user_conn();
	if ($row["type"] == '0') {
	include('adheader.php');
    	//echo 'yyy' . $row["type"];
} else {
	include('header.php');
		//echo  'xxx' . $row["type"];
	}*/

	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
if (isset($_POST['delete'])) {
$delete = $_POST['delete'];

$sql2 = "DELETE FROM profile WHERE pro_id = $delete";
    $result2 = mysqli_query($conn, $sql2);
	//echo $sql2;
	if (mysqli_query($conn, $sql2)) {
    echo "<br><br>Record deleted successfully";
	} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
<?php
	
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$login = $_SESSION["user"];
	$sql = "SELECT * FROM rel_table";
	$result = mysqli_query($conn, $sql);
	
	echo "<br><br>Display: <select name=\"rel\">";
	echo '<option value="">All</option>';
		while ($row = mysqli_fetch_assoc($result)) {
				if ( (isset($_POST['rel'])) AND ($_POST['rel'] == $row["rel_id"]) ) {
					echo '<option value="' . $row["rel_id"] .'" selected>' . $row["rel_description"] . '</option>';
				} else {
					echo '<option value="' . $row["rel_id"] .'">' . $row["rel_description"] . '</option>';
				}
	
		}
		echo '</select> ';
	echo '<input type="submit" value="Go"><br><br>';



?>
<?php
$suid = $_SESSION['suid'];
//$rel_id = $_POST['rel'];
if (isset($_POST['rel'])) {
	$rel_id = $_POST['rel'];
}

if ( (!isset($rel_id)) or ($rel_id == '') ) {
$sql2 = "select p.pro_id, p.pro_rel_id, p.uid, p.pro_name, p.pro_email, p.pro_phone, r.rel_id, r.rel_description FROM profile p, rel_table r WHERE p.pro_rel_id = r.rel_id AND p.uid = $suid";

} else {
$sql2 = "select p.pro_id, p.pro_rel_id, p.uid, p.pro_name, p.pro_email, p.pro_phone, r.rel_id, r.rel_description FROM profile p, rel_table r WHERE p.pro_rel_id = r.rel_id AND p.uid = $suid AND rel_id = $rel_id";

}
//echo $sql2;

$result2 = mysqli_query($conn, $sql2);
/*
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    
	}
	} else {
    echo "0 results";
}

*/
	echo '<a onclick="goto(\'lukebookadd.php\')"><input type="button" value="Add"></a><br><br>';
	echo "<table>";
	echo "<tr>";
	echo "<th>No. </th><th>Name</th><th>Email</th><th>Phone</th><th>Relationship</th><th>Action</th>";
	echo "</tr>";

	
	$n = 0;
	// output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
        // echo "pid: " . $row["pid"]. " - Name: " . $row["name"]. " - D.O.B: " . $row["dob"]. " - Gender: " . $row["gender"]."<br>";
		
		$uid = $row2["uid"];
		$rel_id = $row2["rel_id"];
		$pro_email= $row2["pro_email"];
		$pro_name = $row2["pro_name"];
		$pro_phone = $row2["pro_phone"];
		$rel_description = $row2["rel_description"];
		$pro_id = $row2["pro_id"];
		$n = $n + 1;
		
	
		
		echo "<tr>";
			echo "<td>$n</td><td>$pro_name</td><td>$pro_email</td><td>$pro_phone</td><td>$rel_description</td><td><button type=\"submit\" value=\"$pro_id\" name=\"delete\">Delete</button><a href=\"lukebookedit.php?pro_id=$pro_id\"><input type=\"button\" value=\"Edit\"></a>";
			echo "</tr>";
	
	}
	echo "</table>";



mysqli_close($conn);


?>
</form>

<?php include('footer.php');?>
</body>
</html>