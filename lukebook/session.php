<?php

/*
if (!isset($_SESSION['user'])) {

header ("Refresh: 5; url=http://lukewon.com/index.php?re=0");
exit ("YOU SILLY U THINK YOU CAN HACK MY PAGE!!!!!!!!!!!!!");

}
*/

   
if (!isset($_SESSION["user"])) {

header ("Location: index.php?msg=Session not Valid");
exit ("YOU SILLY U THINK YOU CAN HACK MY PAGE!!!!!!!!!!!!!");

}
function admin() {
    if (!isset($_SESSION["admin"])) {
	header ("Location: home.php?msg=You are not an admin!");
	exit ("YOU SILLY U THINK YOU CAN HACK MY PAGE!!!!!!!!!!!!!");
}
}



?>