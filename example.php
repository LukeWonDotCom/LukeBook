<? session_start() ?>
<? include '/db.php'; ?>
<html>
	<head>
		<title>Example -Example Page</title>
		<? include '/logo.html'; ?>
		<link rel="stylesheet" type="text/css" href="/oml.css">
		<script src="/script.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<? if (isset($_GET['msg'])) {
		echo '<span class="can tooltip" id="msg" onclick="remove(\'msg\')">' . $_GET['msg'] . '<span class="tooltiptext">Click to remove</span></span>';
		}
		?>
		<style>
		
		</style>
	</head>
	<body>
		<h2>Example</h2>
	</body>
</html>