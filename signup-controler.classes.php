<?php

class SignupContr extends signup {
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
       if(empty($this->$uid) || empty($this->$pwd) ||empty($this->$pwdrepeat)|| empty($this->$emailAddress)) {
             $result=false;
       }
       else{
        $result=true;
       }
       return $result;
}
 public function signupuser(){

  if($this->emptyInput() == false){
  header ("loction: ../index.php?error=emptyInput");
    exit();
  }
    if($this->invaliduid() == false){
  header ("loction: ../index.php?error=username");
    exit();
  }
   if($this->invalidemail() == false){
  header ("loction: ../index.php?error=emailAddress");
    exit();
  }
  }
 }
private function invaliduid(){
  $result;
  if(!preg_match(*/^[a-zA-Z-0-9]^$/",$this->uid"))  {
    $result =flase;
  }
  else{
    $result=true;
  }
  return $result;
}
rivate function invalidemail(){
    $result;
    if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))  {
      $result =flase;
    }
    else{
      $result=true;
    }
    return $result;
  }
  public function pwdmatch(){
    $result;
    if($this->pwd !== $this->pwdrepeat)  {
      $result =flase;
    }
    else{
      $result=true;
    }
    return $result;
  }
    rivate function uidtakenCheck (){
    $result;
    if($this->checkUser($this->uid, $this->emailAddress))  {
      $result =flase;
    }
    else{
      $result=true;
    }
    return $result;
  }


    }



?>