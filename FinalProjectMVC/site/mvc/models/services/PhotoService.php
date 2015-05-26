<?php
/**
 * Description of LoginService
 *
 * @author Thomas Nunez
 */

namespace App\models\services;

use App\models\interfaces\IDAO;
use App\models\interfaces\IService;
use App\models\interfaces\IModel;

class PhotoService implements IService {
    
    protected $photoDAO;
    protected $validator;
    protected $model;
    
    function getValidator() {
        return $this->validator;
    }

    function setValidator($validator) {
        $this->validator = $validator;
    }                
     
    function getPhotoDAO() {
        return $this->photoDAO;
    }

    function setPhotoDAO(IDAO $DAO) {
        $this->photoDAO = $DAO;
    }    
    
    function getModel() {
        return $this->model;
    }

    function setModel(IModel $model) {
        $this->model = $model;
    }

    public function __construct( IDAO $photoDAO, IService $validator, IModel $model  ) {
        $this->setPhotoDAO($photoDAO);
        $this->setValidator($validator);
        $this->setModel($model);
    }   
    
    public function validate( IModel $model ) {
        $errors = array();
        if ( !$this->getValidator()->commentIsValid($model->getComment) ) {
            $errors[] = 'Comment is invalid';
        }    
        return $errors;
    }
    
    public function getNewPhotoModel() {
        return clone $this->getModel();
    }   
}