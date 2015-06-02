<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignupService
 *
 * @author Thomas Nunez
 */

namespace App\models\services;

use App\models\interfaces\IDAO;
use App\models\interfaces\IService;
use App\models\interfaces\IModel;

class SignupService implements IService {
    
     protected $DAO;
     protected $validator;
     protected $model;
             
     function getValidator() {
         return $this->validator;
     }

     function setValidator($validator) {
         $this->validator = $validator;
     }

     function getModel() {
         return $this->model;
     }

     function setModel(IModel $model) {
         $this->model = $model;
     }     
     
     function getDAO() {
         return $this->DAO;
     }

     function setDAO(IDAO $DAO) {
         $this->DAO = $DAO;
     }

    public function __construct( IDAO $SignupDAO, IService $validator,IModel $model  ) {
        $this->setDAO($SignupDAO);
        $this->setValidator($validator);
        $this->setModel($model);
    }
    
    public function delete($id) {
        return $this->getDAO()->delete($id);
    }
    
    public function create(IModel $model) {
        
        if ( count($this->validate($model)) === 0 ) {
            return $this->getDAO()->create($model);
        }
        return false;
    }
    public function validate( IModel $model ) {
        $errors = array();
        if ( !$this->getValidator()->emailIsValid($model->getEmail()) ) {
            $errors[] = 'Email is invalid';
        }               
        if ( !$this->getValidator()->userPasswordIsValid($model->getPassword()) ) {
            $errors[] = 'User Password is invalid';
        }
        if ( !$this->getValidator()->zipIsValid($model->getZip()) ) {
            $errors[] = 'Zip is invalid';
        }     
        return $errors;
    }
    
    public function getNewSignupModel() {
        return clone $this->getModel();
    }
    
    
}
