<?php

/**
 * Description of EmailModel
 *
 * @author Thomas Nunez
 */

namespace App\models\services;


class SignupModel extends BaseModel {
    
    private $UserID;
    private $Email;
    private $Password;
    private $FirstName;
    private $LastName;
    private $Address;
    private $City;
    private $State;
    private $Zip;
    
    function getUserID() {
        return $this->UserID;
    }    
    function getEmail() {
        return $this->Email;
    }
    function getPassword(){
        return $this->Password;
    }
    function getFirstName() {
        return $this->FirstName;
    }
    function getLastName() {
        return $this->LastName;
    }
    
     function getAddress() {
        return $this->Address;
    }

    function getCity() {
        return $this->City;
    }

    function getState() {
        return $this->State;
    }

    function getZip() {
        return $this->Zip;
    }
        
    function setEmail($email) {
        $this->Email = $email;
    }

    function setPassword($password) {
        $this->Password = $password;
    }

    function setFirstName($firstname) {
        $this->FirstName = $firstname;
    }

    function setLastName($lastname) {
        $this->LastName = $lastname;
    }

    function setAddress($address) {
        $this->Address = $address;
    }
    
    function setCity($city) {
        $this->City = $city;
    }

    function setState($state) {
        $this->State = $state;
    }

    function setZip($zip) {
        $this->Zip = $zip;
    }
    
}
