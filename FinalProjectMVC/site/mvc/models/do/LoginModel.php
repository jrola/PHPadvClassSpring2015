<?php

/**
 * Description of PhotoTypeModel
 *
 * @author Thomas Nunez
 */

namespace App\models\services;


class LoginModel extends BaseModel {
    
    private $email;
    private $password;
    
    function getEmail() {
        return $this->email;
    }

    function getUserPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->username = $email;
    }

    function setUserPassword($userpassword) {
        $this->password = $userpassword;
    }
}
