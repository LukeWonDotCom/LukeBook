<? session_start() ?>
<html>
<head>
	<title>LukeBook -Home page</title>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<? if (isset($_SESSION["user"])) {
	echo '<script>';
	echo 'location.href=\'home.php?msg=You have autologined\';';
	echo '</script>';
	}
	?>
	<script src="script.js"></script>
	<style>
	luke {
	display: block;
    font-size: 1.5em;
    margin-top: 0.83em;
    margin-bottom: 0.83em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
		
	}
	luke:hover {
		color: green;
		
		
		
	}
	
	
	
	</style>
</head>
<body>
<?

if (isset($_GET['msg'])) {
	echo '<span class="can tooltip" id="msg" onclick="remove(\'msg\')">' . $_GET['msg'] . '<span class="tooltiptext">Click to remove</span></span>';
}

const bla = 'hello';


?>

<luke>LukeBook</luke>



<form method="POST" action="verify.php">
<input type="text" placeholder="Username" name="username"><br><br>
<input type="password" placeholder="Password" name="password"><br><br>
<input type="submit" value="Login"><br><br>
</form>
<!--<a onclick="goto('signup.php')" title="Signup!" class="can ya">Signup!</a><br>-->
<a onclick="goto('download.php')" target="_blank" class="can ya">Download LukeBook!</a><br>
<br><a onclick="goto('links.php')" target="_blank" class="can ya">Links</a><br>
<br><a onclick="goto('lukebank')" target="_blank" class="can ya">LukeBank</a><br>



<?php include('footer.php');?>

</body>
</html>