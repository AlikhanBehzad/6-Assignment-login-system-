<?php
if(isset($_POST["submit"])){


	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	


	include "../classes/dbh.classes.php";
	include "../classes/login.classes.php";
	include "../classes/login-controler.classes.php";
	$login = new logincontroler ("$uid, $pwd,$email");
	$login->loginUser();

	header ("location: .. /index.php?error=none")

}



?>