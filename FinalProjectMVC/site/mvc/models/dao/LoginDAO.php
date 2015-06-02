<?php
/**
 * Description of LoginDAO
 *
 * @author Thomas Nunez
 */

namespace App\models\services;

use App\models\interfaces\IDAO;
use App\models\interfaces\IModel;
use App\models\interfaces\ILogging;
use \PDO;

class LoginDAO extends BaseDAO implements IDAO{
    
    public function __construct( PDO $db, IModel $model, ILogging $log ) {        
        $this->setDB($db);
        $this->setModel($model);
        $this->setLog($log);
    }
    
    /*
        This method will allow the user to login checking comparing the password 
     *  saved in the database
     *      */
    public function login($model) {
         
        $email = $model->getEmail();
        $password = $model->getPassword();
        $db = $this->getDB();

        $stmt = $db->prepare("SELECT * FROM user WHERE Email = :Email");

        if ( $stmt->execute(array(':Email' => $email)) && $stmt->rowCount() > 0 ) {            
            $results = $stmt->fetch(PDO::FETCH_ASSOC);            
            return password_verify($password, $results['Password']);            
        }         
        return false;
    }
    /*
        This method will either update or insert into the login table 
     * depending if the user is new or not unsuccessfully
     */
    public function unsuccessfulLogin($model){
        $successful=0;
        $model->setSuccessful($successful);
        if (!$this->idExist($model->getUserID())) { 
            $insertchk=$this->create($model);  
            return $insertchk;
        }   
        if($this->idExist($model->getUserID())){            
           $updatechk=$this->update($model);
           return $updatechk;
        }    
    }/*
        This method will either update or insert into the login table 
     * depending if the user is new or not successfully
     *      */
    public function successfulLogin($model){
        $successful=1;
        $model->setSuccessful($successful);
        if (!$this->idExist($model->getUserID())) { 
            $insertchk=$this->create($model);  
            return $insertchk;
        }   
        if($this->idExist($model->getUserID())){            
           $updatechk=$this->update($model);
           return $updatechk;
        }
        
    } 
    /*
        This method will check to see the LoginID depending on the UserId entered
     *      */
    public function idExist($id) {
                
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT LoginID FROM login WHERE UserID = :UserID");
         
        if ( $stmt->execute(array(':UserID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    /*
        This method will return the UserID depending on the email entered
     *      */
    public function getUserID($model)
    {
        $email = $model->getEmail();
        $db = $this->getDB();
        if ( $this->emailExist($model->getEmail()) ) {  
            //get user id based on the email entered
            $stmt = $db->prepare("SELECT UserID FROM user WHERE Email  = :Email");          
            //if there is an value that matches user entry and row count is greater than 0
            if ( $stmt->execute(array(':Email' => $email)) && $stmt->rowCount() > 0 ) {   
                //get the data 
                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                
                //return just the user id
                return $results['UserID'];
            }
        }
        return false;         
    }
    /*
        This method will return the UserID depending on the email entered
     *      */
    public function getLoginid($model)
    {
        $userID = $this->getUserID($model);
        
        $db = $this->getDB();
        
        if ( $this->idExist($userID) ) {  
            //get user id based on the email entered
            $stmt = $db->prepare("SELECT LoginID FROM login WHERE UserID = :UserID");          
            
            //if there is an value that matches user entry and row count is greater than 0
            if ( $stmt->execute(array(':UserID' => $userID)) && $stmt->rowCount() > 0 ) {   
                //get the data 
                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                //return just the user id
                return $results['LoginID'];
            }
        }
        return false;         
    }
    /*This method will check to see if the email exist returning the */
    public function emailExist($email) {                
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT UserID FROM user WHERE Email = :Email");
         
        if ( $stmt->execute(array(':Email' => $email)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    /*
        This method will insert into the login table whether the user is 
     *  login in succcessfullly or unsuccessfully
     *      */
    public function create(IModel $model){
        $db = $this->getDB();
        
        $insertbinds = array(  ":UserID" => $this->getUserID($model),
                         ":Password" => password_hash($model->getPassword(), PASSWORD_DEFAULT),
                         ":Successful" => $model->getSuccessful()
                         
                    );           
            //insert user parameters to database            
            $stmt = $db->prepare("INSERT INTO login SET UserID = :UserID, Password = :Password, Successful = :Successful, DateTime = now()");                      
            if ( $stmt->execute($insertbinds) && $stmt->rowCount() > 0 ) {                
                return true;
            }
        return true;
    }
    /*
        This method will update into the login table whether the user is 
     *  login in succcessfullly or unsuccessfully
     *      */
    public function update(IModel $model){
        $db = $this->getDB();
        $updatebinds = array(  ":UserID" => $this->getUserID($model),
                         ":Password" => password_hash($model->getPassword(), PASSWORD_DEFAULT),
                         ":Successful" => $model->getSuccessful(),
                         ":LoginID" => $this->getLoginid($model)
                         
                    );
        if($this->idExist($this->getUserID($model))) {
            $stmt = $db->prepare("UPDATE login SET UserID = :UserID, Password = :Password, Successful = :Successful, DateTime = now() WHERE LoginID = :LoginID");                      
            if ( $stmt->execute($updatebinds) && $stmt->rowCount() > 0 ) {                
                return true;
            }
        }
        return false;
    }
    public function read($id){}
    public function delete($id){}
}
