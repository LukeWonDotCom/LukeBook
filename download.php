<? session_start() ?>
<html>
	<head>
		<title>LukeBook -Home page</title>
		<link rel="stylesheet" type="text/css" href="oml.css">
		<script src="script.js"></script>
		<script>
			var result = 'false';
			function setvary() {
				result = 'true';
			}
			function seemulti() {
				seeblock('iframe'); 
				remove('lol'); 
				see('haha');
			}
			function removemulti() {
				see('lol');
				remove('haha');
				remove('iframe');
			}
			
		</script>
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
		<?php
		/*
		if (isset($_GET['msg'])) {
			echo '<span class="can tooltip" id="msg" onclick="remove(\'msg\')">' . $_GET['msg'] . '<span class="tooltiptext">Click to remove</span></span>';
		}
		*/


		?>
		<? if ( (!isset($_SESSION["admin"])) && (isset($_SESSION["user"])) ) {
			include 'header.php';
		} elseif (isset($_SESSION["admin"])) {
			include 'adheader.php';
		} ?>
		<luke>Download Page</luke>
		<fieldset>
		<legend>Requirements:</legend>
		<p>1. Php 7.0+ Server and Mysql 5.7+ Server</p>
		<p>2. The Php server must have the '<i>mysqli</i>' extension</p>
		<b>The rest of the Requiements are listed in '<i>README.html</i>'</b>
		</fieldset><br>
		<fieldset>
		<legend>Downloads:</legend>
		Self Extrecting exe: <a href="downloads/lukebook.exe" download>Download</a> &nbsp;&nbsp;MD5: <i>49e02d42e464cd8d6d130ea3efbaa99e</i> <b>(This is the newest)</b><br>
		7zip Self Extrecting exe: <a href="downloads/lukebook-7zip.exe" download>Download</a> &nbsp;&nbsp;MD5: <i>ad9682914d2fcd1fd92ac6257e8017c2</i><br>
		Tar file: <a href="downloads/lukebook.tar" download>Download</a> &nbsp;&nbsp;MD5: <i>39b35aa5be6af79400d124a5cb8bf58b</i><br>
		Zip file: <a href="downloads/lukebook.zip" download>Download</a> &nbsp;&nbsp;MD5: <i>638582b96431c6500bb50a1557f77246</i><br>
		</fieldset>
		<br><i><b>After you extrected the files, double click 'README.html' to learn how to install LukeBook. (There is a README.html in your exe/zip/tar, but you can use the online one)</b></i><br><br>
		<p id='lol' style='display:inline'><b onclick="seemulti()" style="cursor:pointer;">Click Me</b> To See the Online <i>README.html</i><br></p>
		<p style="display:none" id="haha"><b onclick="removemulti()" style="cursor:pointer;">Click Me</b> To not see <i>README.html</i></p>
		<iframe src="README.html" height="400" width="900" id="iframe" style="display:none; border:none;"></iframe><br>

		<? if (isset($_SESSION["user"])) { ?>
		<a onclick="goto('home.php')" class="ya">Go back</a>
		<? } else { ?>
		<a onclick="goto('index.php')" class="ya">Go back</a>
		<? } ?>

		<br><?php include('footer.php');?>
	</body>
</html>