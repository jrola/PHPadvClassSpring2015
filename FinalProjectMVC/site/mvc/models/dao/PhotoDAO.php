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
use finfo;
use RuntimeException;

class PhotoDAO extends BaseDAO implements IDAO{
    
    public function __construct( PDO $db, IModel $model, ILogging $log ) {        
        $this->setDB($db);
        $this->setModel($model);
        $this->setLog($log);
    }
    public function useridExist($id) {                
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT UserID FROM user WHERE UserID = :UserID");
         
        if ( $stmt->execute(array(':UserID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }      
    public function idExist($id) {                
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT ImageID FROM images WHERE ImageID = :ImageID");
         
        if ( $stmt->execute(array(':ImageID' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    public function create(IModel $model) {                 
        $db = $this->getDB();
        $binds = array( ":ImageSize" => $model->getImageSize(),
                         ":Directory" => $model->getDirectory(),
                         ":ImageName" => $model->getImageName(),
                         ":Comment" => $model->getComment()
                    );
       
        if ( !$this->idExist($model->getImageId()) ) {                             
            $stmt = $db->prepare("INSERT INTO images SET ImageSize = :ImageSize, Directory = :Directory, ImageName =:ImageName,Comment =:Comment");
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {                              
                //gets the last id inserted to the table
               $model->setImageID(intval($db->lastInsertId()));
               return true;
            }
        }        
        return false;
    }    
    public function userimages(IModel $model) {                 
        $db = $this->getDB();
        $binds = array( ":ImageID" => $model->getImageID(),
                         ":UserID" => $model->getUserID()
                    );
                 
        if ($this->idExist($model->getImageId()) ) {                             
            $stmt = $db->prepare("INSERT INTO userimages SET ImageID = :ImageID, UserID = :UserID");             
               
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {                  
               return true;
            }
        }        
        return false;
    } 
    public function update(IModel $model) {                 
        $db = $this->getDB();         
        $binds = array( ":Imagesize" => $model->getImageSize(),
                         ":Directory" => $model->getDirectory(),
                         ":Comments" => $model->getComment()             
                    );                      
         if ( $this->idExisit($model->getImageId()) ) {            
            $stmt = $db->prepare("INSERT INTO images SET ImageSize = :Imagesize, Directory = :Directory, Comments = :Comments");           
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
        $stmt = $db->prepare("Delete FROM images WHERE ImageID = :ImageID");

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
    
    public function getEmail($model)
    {
        $userid = $model->getUserID();
        $db = $this->getDB();
        if ( $this->useridExist($userid) ) {  
            //get user id based on the email entered
            $stmt = $db->prepare("SELECT Email FROM user WHERE UserID  = :UserID");          
            //if there is an value that matches user entry and row count is greater than 0
            if ( $stmt->execute(array(':UserID' => $userid)) && $stmt->rowCount() > 0 ) {   
                //get the data                 
                $results = $stmt->fetch(PDO::FETCH_ASSOC);                
                //return just the user id
                return $results['Email'];
            }
        }
        return false;         
    }
    public function getImageDirectory($model)
    {
        $userid = $model->getUserID();
        $imageid = $model->getImageID();
        $db = $this->getDB();
        if ( $this->useridExist($userid) ) {  
            //get user id based on the email entered
            $stmt = $db->prepare("SELECT ImageID,Directory,Comment FROM images WHERE ImageID  = :ImageID");          
            //if there is an value that matches user entry and row count is greater than 0
            if ( $stmt->execute(array(':ImageID' => $imageid)) && $stmt->rowCount() > 0 ) {   
                //get the data                 
                $array = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
                    array_push($array, $row);
                } 
                //return just the user id
                return $array;
            }
        }
        return false;         
    }
    
    public function getuserImages($model)
    {
        $userid = $model->getUserID();
        $db = $this->getDB();
        if ($this->useridExist($userid) ) {  
            //get user id based on the email entered
            $stmt = $db->prepare("SELECT ImageID FROM userimages WHERE UserID  = :UserID");          
            //if there is an value that matches user entry and row count is greater than 0
            if ( $stmt->execute(array(':UserID' => $userid)) && $stmt->rowCount() > 0 ) {   
                //get the data            
                $array = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
                    array_push($array, $row);
                }               
                //return just the user id
                return $array;
            }
        }
        return false;         
    }
    public function getImages($model,$array)
    {
        $arrayDirectory = array();
        $userid = $model->getUserID();
        $deleteed = 1;
        $db = $this->getDB();
        //loop through each image id in the array this will get the directories from the imageid
        foreach ($array as $key => $value) { 
            if ($this->useridExist($userid) ) { 
                //get user id based on the email entered
                $stmt = $db->prepare("SELECT Directory,ImageID,Comment FROM images WHERE ImageID  = :ImageID");          
                //if there is an value that matches user entry and row count is greater than 0
                if ( $stmt->execute(array(':ImageID' => $value['ImageID'])) && $stmt->rowCount() > 0 ) {                    
                    //get the data                
                    //get the row of informaiton
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    //push the row into the new arrays 
                    array_push($arrayDirectory, $row);                    
                }
            }
        }
        return $arrayDirectory;        
    }
    
    public function photoContent($model){
        try {
            $username=$this->getEmail($model);
            $directory="img/".$username;
            if(!file_exists ($directory)){
                mkdir($directory);
            }
            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if ( !isset($_FILES['upfile']['error']) || is_array($_FILES['upfile']['error']) ) {       
                throw new RuntimeException('Invalid parameters.');
            }

            // Check $_FILES['upfile']['error'] value.
            switch ($_FILES['upfile']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }
            $imageSize=$_FILES['upfile']['size'];
            // You should also check filesize here. 
            if ($_FILES['upfile']['size'] > 1000000) {
                throw new RuntimeException('Exceeded filesize limit.');
            }

            // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
            // Check MIME Type by yourself.
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $validExts = array(
                            'jpg' => 'image/jpeg',
                            'png' => 'image/png',
                            'gif' => 'image/gif',
                        );    
            $ext = array_search( $finfo->file($_FILES['upfile']['tmp_name']), $validExts, true );


            if ( false === $ext ) {
                throw new RuntimeException('Invalid file format.');
            }

            // You should name it uniquely.
            // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
            // On this example, obtain safe unique name from its binary data.

            $fileName =  sha1_file($_FILES['upfile']['tmp_name']); 
            $location = sprintf($directory.'/%s.%s', $fileName, $ext);
            
            if ( !move_uploaded_file( $_FILES['upfile']['tmp_name'], $location) ) {
                throw new RuntimeException('Failed to move uploaded file.');
            }

            echo 'File is uploaded successfully.';                
        } catch (RuntimeException $e) {

            echo $e->getMessage();

        }
            $model->setImageSize($imageSize);
            $model->setImageName($fileName);
            $model->setDirectory($location);
            //insert function for images
            $this->create($model);
            //insert function for userimages
            $this->userimages($model);
            return true;
        }
}
