<?php

/**
 * Description of Validator
 *
 * @author GForti
 */

namespace App\models\services;

use App\models\interfaces\IService;

class Validator implements IService {
     /**
     * A method to check if an email is valid.
     *
     * @param {String} [$email] - must be a valid email
     *
     * @return boolean
     */
    public function emailIsValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
    }
    public function userPasswordIsValid($password){
        return (preg_match("/^(?=.*[0-9])(?=.*[a-z])(\S+)$/i",$password) && is_string($password) && !empty($password));
    }
    public function zipIsValid($zip){
        return (preg_match("/^[0-9]{5}$/",$zip) && is_numeric($zip) &&  !empty($email) && filter_var($zip, FILTER_VALIDATE_INT) !==false);
    }
    public function commentIsValid($comment){
        return (!empty($comment) && is_string($comment));
    }
}
