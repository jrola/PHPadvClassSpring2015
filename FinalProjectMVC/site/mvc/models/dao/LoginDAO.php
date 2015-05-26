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
          
    public function userExisit($email, $password) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT UserID FROM login WHERE email = :Email AND password = :Password" );
        //if email, password and row count exist return true
        if ( $stmt->execute(array(':Email' => $email,':Password' => $password)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    public function login(IModel $model) {
                 
        $db = $this->getDB();
        
        $binds = array( ":email" => $model->getEmail(),
                        ":password" => $model->getUserPassword()            
                    );
                         
        if ( !$this->userExisit($model->getEmail(),$model->getUserPassword()) ) {
             
            $stmt = $db->prepare("");
             
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
                return true;
            }
        }        
        return false;
    }
    public function create(IModel $model){}
    public function update(IModel $model){}
    public function read($id){}
    public function delete($id){}
}
