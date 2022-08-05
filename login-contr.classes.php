<?php

class loginContr extends login {
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $emailAddress;
    public function __construct($uid,$pwd, $pwdrepeat, $emailAddress){
$this->uid=$uid;
$this->pwd=$pwd;
$this->pwdrepeat=$pwdrepeat;
$this->emailAddress=$emailAddress;
    }
private function emptyInput(){
    $result;
       if(empty($this->$uid) || empty($this->$pwd)) {
             $result=false;
       }
       else{
        $result=true;
       }
       return $result;
}


    }



?>