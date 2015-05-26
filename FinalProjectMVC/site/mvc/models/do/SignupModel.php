<?php

/**
 * Description of EmailModel
 *
 * @author Thomas Nunez
 */

namespace App\models\services;


class SignupModel extends BaseModel {
    
    private $userid;
    private $email;
    private $password;
    private $firstname;
    private $lastname;
    private $address;
    private $city;
    private $state;
    private $zip;
    
    function getUserID() {
        return $this->userid;
    }    
    function getEmail() {
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getFirstName() {
        return $this->firstname;
    }
    function getLastName() {
        return $this->lastname;
    }
    
     function getAddress() {
        return $this->address;
    }

    function getCity() {
        return $this->city;
    }

    function getState() {
        return $this->state;
    }

    function getZip() {
        return $this->zip;
    }
        
    function setEmail($email) {
        $this->username = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    function setLastName($lastname) {
        $this->lastname = $lastname;
    }

    function setAddress($address) {
        $this->address = $address;
    }
    
    function setCity($city) {
        $this->city = $city;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setZip($zip) {
        $this->zip = $zip;
    }
    
}
