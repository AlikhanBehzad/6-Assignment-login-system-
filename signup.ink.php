<?php
if(isset($_POST["submit"])){


	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
	$pwdrepeat=$_POST["pwdrepeat"];


	include "../classes/dbh.classes.php";
	include "../classes/signup.classes.php";
	include "../classes/signup-controler.classes.php";
	signup = new signupcontroler ("$uid, $pwd, $pwdrepeat,$email");
	signup->signupUser();

	header ("location: .. /index.php?error=none")

}



?>