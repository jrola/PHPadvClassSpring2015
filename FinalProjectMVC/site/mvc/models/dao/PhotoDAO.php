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

class PhotoDAO extends BaseDAO implements IDAO{
    
    public function __construct( PDO $db, IModel $model, ILogging $log ) {        
        $this->setDB($db);
        $this->setModel($model);
        $this->setLog($log);
    }
          
    public function idExisit($id) {                
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT ImageID FROM images WHERE ImageID = :ImageID");
         
        if ( $stmt->execute(array(':ImageID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    public function create(IModel $model) {                 
        $db = $this->getDB();
         
        $binds = array( ":imagesize" => $model->getImageSize(),
                         ":directory" => $model->getDirectory(),
                         ":comment" => $model->getComment()             
                    );
                         
        if ( !$this->idExisit($model->getImageId()) ) {             
            $stmt = $db->prepare("INSERT INTO images SET imagesize = :ImageSize, directory = :Directory, comment = :Comments");             
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
               return true;
            }
        }        
        return false;
    }
    
    
     public function update(IModel $model) {
                 
        $db = $this->getDB();
         
        $binds = array( ":imagesize" => $model->getImageSize(),
                        ":directory" => $model->getDirectory(),
                        ":comment" => $model->getComment(),
                    );
                      
         if ( $this->idExisit($model->getImageId()) ) {
            
            $stmt = $db->prepare("UPDATE images SET imagesize = :ImageSize, directory = :Directory,  comment = :Comments");
         
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
                return true;
            } else {
                 $error = implode(",", $db->errorInfo());
                 $this->getLog()->logError($error);
            }             
        } 
         
        return false;
    }
    
    public function delete($id) {
          
        $db = $this->getDB();         
        $stmt = $db->prepare("Delete FROM images WHERE imageid = :ImageID");

        if ( $stmt->execute(array(':ImageID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        } else {
            $error = implode(",", $db->errorInfo());
            $this->getLog()->logError($error);
        }
         
        return false;
    }
    /*this will get us all the photos for a specific user*/
    public function read($id){}
}
