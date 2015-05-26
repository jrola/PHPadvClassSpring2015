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
    
    public function __construct( IService $LoginService  ) {                
        $this->service = $LoginService;  
    }
    
    public function execute(IService $scope) {
        $viewPage = 'login';
        
        $this->data['model'] = $this->service->getNewLoginModel();
        $this->data['model']->reset();
        
        if ( $scope->util->isGetRequest() ) {           
                      
        }        
        $scope->view = $this->data;
        return $this->view($viewPage,$scope);
    }
    
}
