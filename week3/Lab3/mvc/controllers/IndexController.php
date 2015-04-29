<?php
/**
 * Description of IndexController
 *
 * @author 000847713
 */

namespace APP\controller;

use App\models\interfaces\IController;
use App\models\interfaces\IService;

class IndexController extends BaseController implements IController {
   
    public function __construct( ) {        
    }
    
    public function execute(IService $scope) {                  
        
        $this->data["cool"] = 'testing';
        $scope->view = $this->data;
        return $this->view('index',$scope);
    }
}
