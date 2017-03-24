<?php
session_start();
include ('session.php');
include ('db.php');
?>
<html>
	<head>
	<title>LukeBook -Edit Page</title>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<?php include('logo.html'); ?>
	
	</head>
	<body>
	<?php include('checkhead.php'); ?>
	<h2 class="hehe">Editing Page</h2>
	<?php
	
	// Create connection
	$conn = db_connect();
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	$pro_id = $_GET['pro_id'];
	
	//$sql2 = "SELECT type, name, login FROM user_table WHERE uid = '$uid'";
	$sql2 = "select p.pro_name, p.pro_email, p.pro_phone, p.pro_rel_id, r.rel_id, r.rel_description from profile p, rel_table r WHERE p.pro_rel_id = r.rel_id AND pro_id = $pro_id";
	$result = mysqli_query($conn, $sql2);
	$row = mysqli_fetch_assoc($result);
	$pro_name = $row["pro_name"];
	$pro_email = $row["pro_email"];
	$pro_phone = $row["pro_phone"];
	$pro_rel_id = $row["pro_rel_id"];
	//echo $pro_phone;
	
	
	
	
	
	
	
	
	//echo $uid;
	echo "<form action=\"lukebookedit.php?pro_id=$pro_id\" method=\"POST\">";
	
	$sql3 = "SELECT rel_id, rel_description FROM rel_table";
	$result2 = mysqli_query($conn, $sql3);
	//$row2 = mysqli_fetch_assoc($result2);
		
	echo "Name: <input type=\"text\" value=\"$pro_name\" name=\"name\"><br><br>";
	echo "Email: <input type=\"text\" value=\"$pro_email\" name=\"email\"><br><br>";
	echo "Phone <input type=\"text\" value=\"$pro_phone\" name=\"phone\"><br><br>";
	echo "Relationship: <select name=\"relation\">";
		while ($row2 = mysqli_fetch_assoc($result2)) {
			echo 'Hi';
			if ($pro_rel_id == $row2["rel_id"]) {
				echo '<option value="' . $row2["rel_id"] .'" selected>' . $row2["rel_description"] . '</option>';
			} else {
				echo '<option value="' . $row2["rel_id"] .'">' . $row2["rel_description"] . '</option>';
			}
		}
		echo '</select><br><br>';
	echo "<input type=\"submit\" value=\"Update\"><br>";
	
	
	?>
	</form>
	
	
	
	<?php
	

	
	
	
	
	
	if  ( (isset($_POST['name'])) AND (isset($_POST['email'])) AND (isset($_POST['phone']))	AND (isset($_POST['relation'])) ) {
	$pemail = $_POST['email'];
	$pphone = $_POST['phone'];
	$pname =  str_ireplace("'", "''" , $_POST['name']);
	$pname = strip_tags($pname);
	$prel = $_POST['relation'];
	//$sql = "UPDATE profile SET pro_name='$pname', pro_email='$pemail', pro_phone='$ppnone' pro_rel_id=$prel WHERE pro_id='$pro_id'";
	$sql = "UPDATE profile SET pro_name='$pname', pro_email='$pemail', pro_phone='$pphone', pro_rel_id=$prel WHERE pro_id='$pro_id'";
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