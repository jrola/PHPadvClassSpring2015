<?php
/**
 * Description of EmailController
 *
 * @author Thomas Nunez
 */

namespace APP\controller;

use App\models\interfaces\IController;
use App\models\interfaces\IService;

class LoginController extends BaseController implements IController {
   
    protected $service;
    protected $photoservice;
    public function __construct( IService $LoginService) {                
        $this->service = $LoginService;              
    }
    public function execute(IService $scope) {
        $viewPage = 'login';        
        $this->data['model'] = $this->service->getNewLoginModel();
        $this->data['model']->reset();
        
        
        if ( $scope->util->isPostRequest() ) {           
            if ( $scope->util->getAction() == 'get' ) {
                $this->data['model']->map($scope->util->getPostValues());
                $this->data["errors"] = $this->service->validate($this->data['model']);
                $this->data["login"] = $this->service->login($this->data['model']);   
                if($this->data["login"]){
                    session_regenerate_id(TRUE);
                    $answer=$this->service->successfulLogin($this->data['model']);                    
                    if($answer){
                        $userid=$this->service->getUserID($this->data['model']);
                        $scope->util->setLoggedin($userid);
                        $viewPage = 'uploadphoto';                    
                        $scope->util->redirect('uploadphoto');
                    }
                }else{
                    $this->service->unsuccessfulLogin($this->data['model']);
                }
            }                       
        }        
        $scope->view = $this->data;
        return $this->view($viewPage,$scope);
    }
    
}
