<?php

class login extends dbh{


	protected dunction getUser($uid,$pwd){

	$stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid =? OR users_email =?;');
	

	if(!$stmt->execute(aaray($uid,$pwd))){
		$stmt=null;
		header ("loction: ../index.php?error=stmtfailed");
		exit();
	}
	if($stmt->rowCount == 0){

		$stmt = null;
		header ("loction: ../index.php?error=user not Found");
		exit();

	}
$pwdhashed = $stmt->fetchAll(PDO::fetch_assoc);
$checkpwd = password_varify($pwd, $pwdhashed[0]["users_pwd"]);
	if($checkpwd==false){

		$stmt = null;
		header ("loction: ../index.php?error=wrong password");
		exit();

	}
	elseif ($checkpwd == true) {
		$stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid =? OR users_email =? AND users_pwd=?;');


			if(!$stmt->execute(aaray($uid,$uid, $pwd))){
				$stmt=null;
				header ("loction: ../index.php?error=stmtfailed");
				exit();
	}
						if($stmt->rowCount == 0){

								$stmt = null;
								header ("loction: ../index.php?error=user not Found");
									exit();

	}

	$user = $stmt->fetchAll(PDO::fetch_assoc);

		session_start();

		$_SESSION["userid"] = $user[0]["users_id"];

		$_SESSION["userid"] = $user[0]["users_uid"];
		

}
$stmt=null;
}
?