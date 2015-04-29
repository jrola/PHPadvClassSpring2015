<?php
/**
 * Description of Page404Controller
 *
 * @author 000847713
 */

namespace APP\controller;

use App\models\interfaces\IController;
use App\models\interfaces\IService;

class Page404Controller extends BaseController implements IController {
    
    public function execute(IService $scope) {
        $this->data['error'] = $scope->util->getUrlParam('error');
        $scope->view = $this->data;
        return $this->view('page404',$scope);
    }
}
