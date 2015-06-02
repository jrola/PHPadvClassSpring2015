<?php

/**
 * Description of PhotoTypeModel
 *
 * @author Thomas Nunez
 */

namespace App\models\services;


class PhotoModel extends BaseModel {
    private $UserID;
    private $imageid;
    private $imagename;
    private $imagesize;
    private $directory;
    
    function getUserID(){
        return $this->UserID;
    }
    function getImageId(){
        return $this->imageid;
    }
    function getImageName(){
        return $this->imagename;
    }
    
    function getImageSize() {
        return $this->imagesize;
    }

    function getDirectory() {
        return $this->directory;
    }
    
    function setImageID($ImageID) {
        $this->imageid = $ImageID;
    }
    function setUserID($UserID) {
        $this->UserID = $UserID;
    }
    function setImageSize($imagesize) {
        $this->imagesize = $imagesize;
    }
    
    function setImageName($imagename) {
        $this->imagename = $imagename;
    }
    
    function setDirectory($directory) {
        $this->directory = $directory;
    }
    
       
}
