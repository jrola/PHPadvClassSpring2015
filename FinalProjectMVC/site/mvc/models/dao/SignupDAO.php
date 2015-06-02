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
    public function emailExist($email) {
                
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT Email FROM user WHERE Email = :Email");
         
        if ( $stmt->execute(array(':Email' => $email)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    public function create(IModel $model) {
                 
        $db = $this->getDB();
         
        $binds = array( ":Email" => $model->getEmail(),
                         ":Password" => password_hash($model->getPassword(), PASSWORD_DEFAULT),
                         ":First" => $model->getFirstName(),
                         ":Last" => $model->getLastName(),
                         ":Address" => $model->getAddress(),
                         ":City" => $model->getCity(),
                         ":State" => $model->getState(),
                         ":Zip" => $model->getZip(),
                    );
         if ( !$this->emailExist($model->getEmail()) ) {             
            //insert user parameters to database
            $stmt = $db->prepare("INSERT INTO user SET FirstName = :First, LastName = :Last, Address = :Address, City = :City, State = :State, Zip = :Zip, Email = :Email, Password =:Password");          
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
