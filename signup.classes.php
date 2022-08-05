<?php

class signup extends dbh{


	protected dunction setUser($uid,$email,$pwd){

	$stmt = $this->connect()->prepare('INSERT INTO users($users_uid, $users_email, $users_pwd) Values(?,?,?);');

	$hashedpwd = password_hash($pwd, password_default);

	if(!$stmt->execute(aaray($uid,$hashedpwd,$email){
		$stmt=null,
		header ("loction: ../index.php?error=stmtfailed");
		exit();
	}
	$stmt =null;


protected dunction checkUser($uid,$email){

	$stmt = $this->connect()->prepare('SELECT users_uid from users WHERE users_uid- ? OR users_email) WHERE (?,?,?);');
	if(!$stmt->execute(aara($uid,$email){
		$stmt=null,
		header ("loction: ../index.php?error=stmtfailed");
		exit();
	}
	$resultCheck;

	if($stmt->rowCount()>0){
		$$resultChec=false;
	}
	else{
		$resultCheck=true;
	}
	return $resultCheck;
}
}
?