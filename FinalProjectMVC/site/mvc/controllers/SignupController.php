<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailtypeController
 *
 * @author Thomas Nunez
 */

namespace APP\controller;

use App\models\interfaces\IController;
use App\models\interfaces\IService;

class SignupController extends BaseController implements IController {
       
    public function __construct( IService $SignupService ) {                
        $this->service = $SignupService;             
    }
    public function execute(IService $scope) {
        $viewPage = 'signup';            
        $this->data['model'] = $this->service->getNewSignupModel();
        $this->data['model']->reset();           
       
        if ( $scope->util->isPostRequest() ) {            
            if ( $scope->util->getAction() == 'create' ) {
                $this->data['model']->map($scope->util->getPostValues());
                $this->data["errors"] = $this->service->validate($this->data['model']);
                $this->data["saved"] = $this->service->create($this->data['model']);
                //if saved is true change have user log in
                if($this->data["saved"]){
                    $this->data['model']->reset();   
                    $viewPage = 'login';
                }
            }                       
        }        
        $scope->view = $this->data;
        return $this->view($viewPage,$scope);
    }   
}
