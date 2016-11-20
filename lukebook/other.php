<? session_start() ?>
<html>
	<head>
		<title>LukeBook -Other Links</title>
		<? include 'logo.html'; ?>
		<link rel="stylesheet" type="text/css" href="oml.css">
		<? if (isset($_GET['msg'])) {
		echo '<span class="can tooltip" id="msg" onclick="remove(\'msg\')">' . $_GET['msg'] . '<span class="tooltiptext">Click to remove</span></span>';
		}
		?>
		<script src="script.js"></script>
		<script>
		function conf() {
		var c = confirm('LukeBank is in Devlopment prosess\nAre you sure you want to proseed?');
		if (c == true) {
			goto('lukebank');
		} else {
			replace('text', 'Canceled');
		}
		}
		
		
		
		
		</script>
		<style>
		
		</style>
	</head>
	<body>
		<? include 'checkhead.php'; ?>
		<h2>Other Links</h2>
		<a onclick="goto('links.php')" class="can ya">Links</a><br><br>
		<a onclick="goto('download')" class="can ya">Download Lukebook!</a><br><br>
		<a onclick="conf()" class="can ya">Lukebank</a><br><br>
		<a onclick="goto('angular')" class="can ya">AngularJS Test Pages</a><br>
		<p id="text"></p>
		<? include 'footer.php'; ?>
	</body>
</html>