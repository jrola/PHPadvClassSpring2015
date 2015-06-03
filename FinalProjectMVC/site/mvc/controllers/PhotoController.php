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
            if ( $scope->util->getAction() == 'delete' ) {
                $this->data['model']->map($scope->util->getPostValues());   
                $this->service->deletePhoto($scope->util->getPostParam('ImageID'));
                $images=$this->service->getuserimages($this->data['model']);
                $this->data['directories']=$this->service->getImages($this->data['model'],$images);    
            }
            //updating 
            if ( $scope->util->getAction() == 'update' ) {
                //change the view to uploadphotoedit.php
                $viewPage='uploadphotoedit';
                //redirect to the contoller attached to the view
                $scope->util->redirect('uploadphotoedit');
                $this->data['model']->map($scope->util->getPostValues());   
                $this->data['comments']=($scope->util->getPostParam('Comment'));     
                
                $this->data['ImageData']=$this->service->getImageDirectory($this->data['model']); 
                foreach ($scope->view['ImageData'] as $value) {
                    $this->data['UpdateDirectory']=$value['Directory'];
                    $this->data['UpdateImageID']=$value['ImageID'];
                    $this->data['UpdateComment']=$value['Comment'];
                }
            }
        }else{
            $images=$this->service->getuserimages($this->data['model']);
            $this->data['directories']=$this->service->getImages($this->data['model'],$images);     
            
        }
        $scope->view = $this->data;
        return $this->view($viewPage,$scope);
    }
    
}
