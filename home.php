<?php session_start();
include ('session.php');
?>
<html>
	<head>
	<?php include('logo.html'); ?>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<script>
	</script>
	
	<title>LukeBook -Home Page</title>
	<!--Some Random Stuff Spot-->
	
	</head>

	<body>
	<?php //include('header.php'); 
//echo 'hi';	?>
	
	<?php 
	include('db.php');
	$row = user_conn();
	if ($row["type"] == '0') {
		include('adheader.php');
		//echo 'yyy' . $row["type"];
		$_SESSION["admin"] = "yes";
	} else {
		include('header.php');
		//echo  'xxx' . $row["type"];
	}
	
	
	
	if (isset($_GET['msg'])) {
		echo '<span class="can tooltip" id="msg" onclick="remove(\'msg\')"><h4>' . $_GET['msg'] . '</h4><span class="tooltiptext">Click to remove</span></span>';
		
		
	}
	
	const Title = 'Home Page';
	echo '<br><l1 class="can hehe">' . Title . '</l1>';
	//echo "<h2>Welcome " . $_SESSION["user"] . "</h2>" ?>
	
	
	<?php

	
		$row = mysqli_fetch_assoc($result);*/
		//echo $row["type"] . "<br>";
		$_SESSION["suid"] = $row["uid"];
		$pn = array(
		"link" => array("admin.php", "lukebook.php", "cal.php", "other.php"),
		"name" => array("Admin Page", "LukeBook", "Calculator", "Other Links")		
		);
		
		
		
		
		echo '<lol>';
	    if ($row["type"] == "0") {
		//$_SESSION["admin"] = "yes";
		echo '<lil><p><a onclick="goto(\'admin.php\')" title="Admin Page" class="can ya">' . $pn['name'][0] .  '</a></p></lil>';
		
		//echo '<lil><a href="sendmail.php" class="can">Sendmail (still Building)</a></lil>';
		}
		
		echo '<lil><p><a onclick="goto(\'lukebook.php\')" title="LukeBook" class="can ya">' . $pn['name'][1] .  '</a><p></lil>';
		
			
		//echo '<lil><a href="logout.php" title="Logout" class="can">Logout</a></lil>';	
		
		echo '<lil><a onclick="goto(\'cal.php\')" title="Calculator" class="can ya">' . $pn['name'][2] .  '</a></lil><br>';
		
		echo '<lil><a onclick="goto(\'other.php\')" title="Other Links" class="can ya">' . $pn['name'][3] .  '</a></lil>';
		
		echo '</lol>';
		
	
	
	
	
		
	
	
	
	
	
	
	
	
	
	
	
	
	

	//mysqli_close($conn);
	
	
	?>

	
	<?php include('footer.php');?>
	
	
	
	</body>



</html>
