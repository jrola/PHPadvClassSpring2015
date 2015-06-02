<?php

/**
 * Description of PhotoTypeModel
 *
 * @author Thomas Nunez
 */

namespace App\models\services;

class LoginModel extends BaseModel{
    private $UserID;
    private $LoginID;
    private $Email;
    private $Password;
    private $Successful;
    
    function getUserID(){
        return $this->UserID;
    }
    
    function getLoginID(){
        return $this->LoginID;
    }
    
    function getEmail() {
        return $this->Email;
    }

    function getPassword() {
        return $this->Password;
    }
    
    function getSuccessful(){
        return $this->Successful;
    }
    
    function setUserID($userid){
        $this->UserID = $userid;
    }
    
    function setEmail($email) {
        $this->Email = $email;
    }
    
    function setLoginID($loginid){
        $this->LoginID = $loginid;
    }

    function setPassword($userpassword) {
        $this->Password = $userpassword;
    }
    function setSuccessful($successful){
        $this->Successful  = $successful;
    }
    
}
