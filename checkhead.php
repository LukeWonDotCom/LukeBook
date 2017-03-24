<?if ((isset($_SESSION["admin"])) and ($_SESSION["admin"] == 'yes')) {
	include('adheader.php');
    	//echo 'yyy' . $row["type"];
} elseif (isset($_SESSION['user'])) {
include('header.php');
}
?>