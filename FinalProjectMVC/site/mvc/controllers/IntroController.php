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

class IntroController extends BaseController implements IController {  

    public function __construct( ) {        
    }
    public function execute(IService $scope) {                  
        $viewPage = 'intro';
        $scope->view = $this->data;
        return $this->view($viewPage,$scope);
    }
    
}
