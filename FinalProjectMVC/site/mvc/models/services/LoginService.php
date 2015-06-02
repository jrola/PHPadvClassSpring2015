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

class LoginService implements IService {
    
    protected $loginDAO;
    protected $photomodel;
    protected $validator;
    protected $model;
    
    function getValidator() {
        return $this->validator;
    }

    function setValidator($validator) {
        $this->validator = $validator;
    }                
    function getPhotoModel() {
        return $this->photomodel;
    }

    function setPhotoModel(IModel $model) {
        $this->photomodel = $model->map($values);
    }  
    
    function getLoginDAO() {
        return $this->loginDAO;
    }

    function setLoginDAO(IDAO $DAO) {
        $this->loginDAO = $DAO;
    }    
    
    function getModel() {
        return $this->model;
    }

    function setModel(IModel $model) {
        $this->model = $model;
    }

    public function __construct( IDAO $loginDAO, IService $validator, IModel $model  ) {
        $this->setLoginDAO($loginDAO);
        $this->setValidator($validator);
        $this->setModel($model);
    }   
    public function login($model) {
        return $this->getLoginDAO()->login($model);
    }
    public function getUserID($model) {
        return $this->getLoginDAO()->getUserID($model);
    }
    public function successfulLogin($model) {
        return $this->getLoginDAO()->successfulLogin($model);
    }
    public function unsuccessfulLogin($model) {
        return $this->getLoginDAO()->unsuccessfulLogin($model);
    }
    public function validate( IModel $model ) {
        $errors = array();
        if ( !$this->getValidator()->emailIsValid($model->getEmail()) ) {
            $errors[] = 'Email is invalid';
        }
        if ( !$this->getValidator()->userPasswordIsValid($model->getPassword()) ) {
            $errors[] = 'User Password is invalid';
        }      
        return $errors;
    }
    
    public function getNewLoginModel() {
        return clone $this->getModel();
    }   
}
