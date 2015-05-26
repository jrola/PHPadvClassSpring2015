<?php

/**
 * Description of PhotoTypeModel
 *
 * @author Thomas Nunez
 */

namespace App\models\services;


class PhotoModel extends BaseModel {
    private $imageid;
    private $imagesize;
    private $directory;
    private $comment;
    
    function getImageId(){
        return $this->imageid;
    }
    
    function getImageSize() {
        return $this->imagesize;
    }

    function getDirectory() {
        return $this->directory;
    }
    
    function getComment() {
        return $this->comment;
    }

    function setImageSize($imagesize) {
        $this->imagesize = $imagesize;
    }
    
    function setDirectory($directory) {
        $this->directory = $directory;
    }
    
    function setCommnet($comment) {
        $this->comment = $comment;
    }    
}
