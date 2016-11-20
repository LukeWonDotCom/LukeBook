<?php session_start();
include ('session.php');
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="oml.css">
	<?php include('logo.html'); ?>
	<title>LukeBook -Calculator</title>
	<!--Some Random Stuff Spot-->
	
	</head>
	<body>
	<?php include('checkhead.php'); ?>
	
	<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<br><l1 class="hehe can">Calculator</l1><br>
	<br>Input numbers: <input type="number" name="one"  placeholder="Input 1" required> And <input type="number" name="two" placeholder="Input 2" required><br>
	<br>Type: <select name="sel">
	<?php
	switch ($_GET['sel']) {
    case 0:
        echo '<option value="0" selected>+</option>
			  <option value="1">-</option>
			  <option value="2">*</option>
			  <option value="3">&divide</option>';
        break;
    case 1:
        echo '<option value="0">+</option>
			  <option value="1" selected>-</option>
			  <option value="2">*</option>
			  <option value="3">&divide</option>';
        break;
    case 2:
        echo '<option value="0">+</option>
			  <option value="1">-</option>
			  <option value="2" selected>*</option>
			  <option value="3">&divide</option>';
        break;
    case 3:
		echo '<option value="0">+</option>
			  <option value="1">-</option>
			  <option value="2">*</option>
			  <option value="3" selected>&divide</option>';
	default:
        echo '
		<option value="0">+</option>
		<option value="1">-</option>
		<option value="2">*</option>
		<option value="3">&divide</option>
		
		';
}
	
	
	
	
	?>
	</select><br><br>
	<input type="submit" value="Submit">
	
	</form>
	<?php
	
	if (isset($_GET['sel'])) {
		$sel = $_GET['sel'];
		$one = $_GET['one'];
		$two = $_GET['two'];
		echo 'Total: ';
		
		if ($_GET['sel'] == 0) {
			
			$total = $one + $two;
			echo $total;
			
			
		} elseif ($_GET['sel'] == 1) {
			$total = $one - $two;
			echo $total;
			
			
		} elseif ($_GET['sel'] == 2) {
			$total = $one * $two;
			echo $total;
			
			
		} elseif ($_GET['sel'] == 3) {
			$total = $one / $two;
			echo $total;
			
			
		}
		
		
		
	}
	
	
	
	
	
	
	
	
	?>
	<?php include('footer.php');?>
	</body>
	</html>