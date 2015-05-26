<?php
/**
 * Description of SignupDAO
 *
 * @author Thomas Nunez
 */

namespace App\models\services;

use App\models\interfaces\IDAO;
use App\models\interfaces\IModel;
use App\models\interfaces\ILogging;
use \PDO;


class SignupDAO extends BaseDAO implements IDAO{
        
     public function __construct( PDO $db, IModel $model, ILogging $log ) {        
        $this->setDB($db);
        $this->setModel($model);
        $this->setLog($log);
    }
    
    public function idExisit($id) {                
        $db = $this->getDB();
        //passing in all parameters to verify user there isnt already another acoount
        $stmt = $db->prepare("SELECT UserID FROM user WHERE firstname = :First AND lastname = :Last AND address = :Address1 AND city = :City AND state = :State AND zip = :Zip AND email = :Email AND password =:Password");
        //if user id exist or a row in the database exists return true
        if ( $stmt->execute(array(':UserID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        }
        //if there isnt any userid nor row return false
        return false;
    }
    
    public function create(IModel $model) {
                 
        $db = $this->getDB();
         
        $binds = array( ":email" => $model->getEmail(),
                         ":password" => $model->getPassword(),
                         ":firstname" => $model->getFirstName(),
                         ":lastname" => $model->getLastName(),
                         ":address" => $model->getAddress(),
                         ":city" => $model->getCity(),
                         ":state" => $model->getState(),
                         ":zip" => $model->getZip(),
                    );
        //if user id exist depending on user input from login form                
        if ( !$this->idExisit($model->getUserID()) ) {
            //insert user parameters to database
            $stmt = $db->prepare("INSERT INTO email SET firstname = :First, lastname = :Last, address = :Address1, city = :City, state = :State, zip = :Zip, email = :Email, password =:Password");
            
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
               return true;
            }
        }        
        return false;
    }       
    /*included because of interface not in use*/
    public function update(IModel $model){}
    public function read($id){}
    
    public function delete($id) {          
        $db = $this->getDB();         
        $stmt = $db->prepare("Delete FROM user WHERE userid = :UserID");

        if ( $stmt->execute(array(':UserID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        } else {
            $error = implode(",", $db->errorInfo());
            $this->getLog()->logError($error);
        }         
        return false;
    }
}
