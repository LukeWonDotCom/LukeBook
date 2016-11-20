<?php
session_start();


include ('db.php');


$user = $_POST['username'];
$pw = $_POST['password'];



$conn = db_connect();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//$conn = db_connect();


if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT uid, login, password FROM user_table WHERE login = \"$user\" AND password = \"$pw\"";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
/*--------------------------------------
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "User Name: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

--------------------------------------*/

if (mysqli_num_rows($result) <= 0) {
	header ('Location: index.php?msg=Incorect User Name or Password');
	exit ("<h5>Incorect User Name or Password. The username you entered is $user</h5>");
} else {
	$row = mysqli_fetch_assoc($result);
	header ("Location: home.php");
	$_SESSION["user"] = $user;

}
//De-Buging--------------
// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//-----------------------


?>