<?php

class dbh {
 protected function connec(){
    try{
       $username = "root";
       $password = "";
       $dbh = new PDO('mysql:host-localhost;dbname=ooplogin',$username, $password);
       return $dbh;
    }
catch(PDOException $e){
    print "Error:" . $e->getMessage() . "<br/>";
    die();

}
 }
}

?>