<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author User
 */

namespace APP\controller;

use App\models\interfaces\IController;
use App\models\interfaces\IService;


class PhotoController extends BaseController implements IController {  

    public function __construct( IService $PhotoService  ) {                
        $this->service = $PhotoService;  
    }
    public function execute(IService $scope) {                  
        $viewPage = 'uploadphoto';
        $this->data['model'] = $this->service->getNewPhotoModel();
        $this->data['model']->reset();
        
        //user id passed from seesion
        $userid=$scope->util->getLoggedin();
        //setting the user id to the user id variable in the model
        $this->data['model']->setUserID($userid);
        
        if ( $scope->util->isPostRequest() ) {           
            if ( $scope->util->getAction() == 'get' ) {
                $this->data['model']->map($scope->util->getPostValues());   
                $imageSuccess=$this->service->photoContent($this->data['model']);
                $images=$this->service->getuserimages($this->data['model']);
                $this->data['directories']=$this->service->getImages($this->data['model'],$images);               
            }
        }
        $scope->view = $this->data;
        return $this->view($viewPage,$scope);
    }
    
}
